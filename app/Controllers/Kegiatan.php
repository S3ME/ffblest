<?php

namespace App\Controllers;
use App\Models\KegiatanModel;

class Kegiatan extends BaseController
{
    public function index()
    {
        // Calling Models
        $KegiatanModel          = new KegiatanModel();

        // Populating Data
        $newses                 = $KegiatanModel->orderBy('created_at', 'DESC')->paginate(8, 'kegiatan');

        // Parsing Data to View
        $data                   = $this->data;
        $data['title']          = 'Kegiatan Masyarakat F2BLEST';
        $data['description']    = 'Developed By Dismas Banar';
        $data['newses']         = $newses;
        $data['count']          = count($newses);
        $data['pager']          = $KegiatanModel->pager;

        // Rendering View
        return view('kegiatan/home', $data);
    }

    public function detail($slug)
    {
        // Calling Models
        $KegiatanModel          = new KegiatanModel();

        // Populating Data
        $article                = $KegiatanModel->where('slug', $slug)->orderBy('created_at', 'DESC')->first();
        $nextarticles           = $KegiatanModel->orderBy('updated_at', 'ASC')->where('updated_at >', $article['updated_at'])->limit(1)->get()->getResultArray();
        $prevarticles           = $KegiatanModel->orderBy('updated_at', 'DESC')->where('updated_at <', $article['updated_at'])->limit(1)->get()->getResultArray();
        
        if (!empty($nextarticles)) {
            foreach ($nextarticles as $nextarticle) {
                $nexturl        = $nextarticle['slug'];
            }
        } else {
            $nexturl            = '';
        }

        if (!empty($prevarticles)) {
            foreach ($prevarticles as $prevarticle) {
                $prevurl        = $prevarticle['slug'];
            }
        } else {
            $prevurl            = '';
        }

        // URL Encode
        $url        = base_url().'kegiatan/'.$slug;
        $urlencode  = urlencode($url);

        // Parsing Data to View
        $data                   = $this->data;
        $data['title']          = $article['title'];
        $data['description']    = 'Developed By Dismas Banar';
        $data['article']        = $article;
        $data['nextarticles']   = '/kegiatan/'.$nexturl;
        $data['prevarticles']   = '/kegiatan/'.$prevurl;
        $data['url']            = $url;
        $data['urlencode']      = $urlencode;

        // Rendering View
        return view('kegiatan/detail', $data);
    }
    
    public function indexoffice()
    {
        // Calling Models
        $KegiatanModel  = new KegiatanModel();

        // Populating Data
        $user       = auth()->user();
        $blogs      = $KegiatanModel->orderBy('created_at', 'DESC')->paginate(10, 'kegiatan');

        // Parsing Data to View
        $data                   = $this->data;
        $data['title']          = 'Daftar Artikel';
        $data['description']    = 'Developed By Dismas Banar';
        $data['user']           = $user;
        $data['blogs']          = $blogs;
        $data['pager']          = $KegiatanModel->pager;

        // Rendering View
        return view('office/blog', $data);
    }
    
    public function indexadd()
    {
        // Populating Data
        $user       = auth()->user();

        // Parsing Data to View
        $data                   = $this->data;
        $data['title']          = 'Formulir Tambah Artikel';
        $data['description']    = 'Developed By Dismas Banar';
        $data['user']           = $user;

        // Rendering View
        return view('office/blog-add', $data);
    }

    public function new()
    {
        // Calling Models
        $KegiatanModel  = new KegiatanModel();

        // Populating Data
        $input      = $this->request->getPost();

        // Validation Rules
        $rules = [
            'title'     => 'required|alpha_numeric_punct|is_unique[kegiatan.title]',
            'images'    => 'required'
        ];

        // Validating
        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
        
        // Processing data
        if (isset($input['highlight'])) {
            $highlight = 1;
        } else {
            $highlight = 0;
        }

        $slug = preg_replace('/\s+/', '-', $input['title']);
        
        $insert = [
            'title'         => $input['title'],
            'slug'          => $slug,
            'images'        => $input['images'],
            'description'   => $input['description'],
            'introtext'     => $input['pendahuluan'],
            'content'       => $input['content'],
            'highlight'     => $highlight
        ];
        $KegiatanModel->insert($insert);

        return redirect()->to('office/blog')->with('message', 'Artikel berhasil ditambahkan');
    }
    
    public function indexedit($id)
    {
        // Calling Models
        $KegiatanModel  = new KegiatanModel();

        // Populating Data
        $user       = auth()->user();
        $blog       = $KegiatanModel->find($id);

        // Parsing Data to View
        $data                   = $this->data;
        $data['title']          = 'Formulir Perubahan Artikel';
        $data['description']    = 'Developed By Dismas Banar';
        $data['user']           = $user;
        $data['blog']           = $blog;

        // Rendering View
        return view('office/blog-edit', $data);
    }

    public function edit($id)
    {
        // Calling Models
        $KegiatanModel = new KegiatanModel();

        // Populating Data
        $input  = $this->request->getPost();
        $blog   = $KegiatanModel->find($id);

        // Validation Rules
        $rules = [
            'title'     => 'required|alpha_numeric_punct|is_unique[kegiatan.title,kegiatan.id,'.$id.']',
            'images'    => 'required'
        ];

        // Validating
        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Processing Data
        if (isset($input['highlight'])) {
            $highlight = 1;
        } else {
            $highlight = 0;
        }

        if ($blog['images'] != $input['images']) {
            unlink('images/kegiatan/'.$blog['images']);
        }

        $update = [
            'title'         => $input['title'],
            'images'        => $input['images'],
            'description'   => $input['description'],
            'introtext'     => $input['pendahuluan'],
            'content'       => $input['content'],
            'highlight'     => $highlight
        ];

        $KegiatanModel->update($id, $update);

        return redirect()->to('office/blog')->with('message', 'Artikel berhasil diperbarui.');
    }

    public function delete()
    {
        // Calling Models
        $KegiatanModel  = new KegiatanModel();

        // Populating Data
        $input      = $this->request->getPost();
        
        // Validation Rules
        $rules = [
            'blog-id'  => 'required'
        ];

        // Validating
        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Processing Data
        $KegiatanModel->delete($input['blog-id']);

        return redirect()->back()->with('error', 'Artikel berhasil dihapus.');
    }

    public function upload()
    {
        $input      = $this->request->getFile('upload');

        // Validation Rules
        $rules = [
            'upload'   => 'uploaded[upload]|is_image[upload]|max_size[upload,2048]',
        ];

        // Validating
        if (!$this->validate($rules)) {
            http_response_code(400);
            die(json_encode(array('message' => $this->validator->getErrors())));
        }

        if ($input->isValid() && !$input->hasMoved()) {
            $filename = $input->getRandomName();
            $input->move(FCPATH . '/images/kegiatan/', $filename);

            // Returning Message
            die(json_encode($filename));
        }
    }
}