<?php

namespace VideoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use VideoBundle\Entity\Video;

$_SESSION['user_id'] = 1;
$_SESSION['pseudo'] = 'goju';

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $videoRepository = $em->getRepository('VideoBundle:Video');

        $requette = $videoRepository->findAll();

        return $this->render('VideoBundle:Default:index.html.twig',
        array('videos' => $requette)
        );
    }

    public function videoAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $videoRepository = $em->getRepository('VideoBundle:Video');

        $requette = $videoRepository->find($id);

        if ($requette == null) {
            throw new NotFoundHttpException("La vidéo d'id ".$id." n'existe pas.");
        }
        return $this->render('VideoBundle:Default:video.html.twig',
            array('video' => $requette, 'name' => $_SESSION['pseudo'])
        );
    }

    public function uploadAction()
    {
        if($_POST){
            $title = $_POST['title'];
            $link = $_POST['link'];
            $description = $_POST['description'];
            $image = $_POST['image'];

            if($title && $link && $description && $image){
                $video = new Video();
                $link = str_replace("watch?v=", "embed/", $link);
                $video->setName($title);
                $video->setUrl($link);
                $video->setDescription($description);
                $video->setImage($image);
                $video->setUserId($_SESSION['user_id']);

                $em = $this->getDoctrine()->getManager();
                $videoRepository = $em->getRepository('VideoBundle:Video');

                $requette = $videoRepository->findBy(
                    array('userId' => $_SESSION['user_id']),
                    array('id' => 'desc')
                );
                $em->persist($video);
                $em->flush();
                var_dump($requette[0]);
                return $this->render('VideoBundle:Default:video.html.twig',
                    array('video' => $requette[0], 'name' => $_SESSION['pseudo'])
                );
            }
        }
        return $this->render('VideoBundle:Default:upload.html.twig');
    }

    public function myVideosAction()
    {
        //unset($_SESSION['user_id']);
        $_SESSION['user_id'] = 1;

        if (isset($_SESSION['user_id'])) {

            $em = $this->getDoctrine()->getManager();
            $videoRepository = $em->getRepository('VideoBundle:Video');

            $requette = $videoRepository->findBy(array('userId' => $_SESSION['user_id']));

            return $this->render('VideoBundle:Default:myVideos.html.twig',
                array('videos' => $requette)
            );
        }else{
            return $this->indexAction();
        }
    }

    public function userVideoAction($id)
    {
        //unset($_SESSION['user_id']);
        //$_SESSION['user_id'] = 1;

        $em = $this->getDoctrine()->getManager();
        $videoRepository = $em->getRepository('VideoBundle:Video');

        $requette = $videoRepository->findBy(array('userId' => $id));

        return $this->render('VideoBundle:Default:userVideo.html.twig',
            array('videos' => $requette)
        );
    }
}
