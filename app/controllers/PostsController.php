<?php

class PostsController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        foreach (new DirectoryIterator(base_path().'/resources/posts/published') as $postInfo) {
            if($postInfo->isDot()) continue;
            $postFile = $postInfo->openFile();

            $postFileContent =  file_get_contents($postFile->getRealPath());

            $postFileContentArray = preg_split('/\n\n/', $postFileContent);

            $rawJson = array_shift($postFileContentArray);
            $postMeta = json_decode($rawJson, true);

            $post = new StdClass;
            $post->meta = $postMeta;

            $post->meta['slug'] = $postFile->getBasename('.md');

            $posts[] = $post;
        }

        return View::make('posts.index', compact('posts'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($slug)
    {
        foreach (new DirectoryIterator(base_path().'/resources/posts/published') as $postInfo) {
            if($postInfo->isDot()) continue;

            if ($slug == $postInfo->getBasename('.md')){
                $postFile = $postInfo->openFile();

                $postFileContent =  file_get_contents($postFile->getRealPath());

                $postFileContentArray = preg_split('/\n\n/', $postFileContent);

                $rawJson = array_shift($postFileContentArray);
                $postMeta = json_decode($rawJson, true);
                $postContent = implode("\n\n", $postFileContentArray);

                $post = new StdClass;
                $post->meta = $postMeta;
                $post->content = $postContent;

                $post->meta['slug'] = $postFile->getBasename('.md');

                return View::make('posts.show', compact('post'));
            }

        }
    }


}
