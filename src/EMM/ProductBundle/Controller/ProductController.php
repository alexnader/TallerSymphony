<?php

namespace EMM\ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use EMM\ProductBundle\Entity\Product;
use EMM\ProductBundle\Form\ProductType;
use Symfony\Component\HttpFoundation\RedirectResponse;
class ProductController extends Controller
{
   public function indexAction()
    {
        $em = $this->getDoctrine()->getmanager();
        $products = $em->getRepository('EMMProductBundle:Product')->findAll();
        return $this->render('EMMProductBundle:Product:index.html.twig', array('products'=>$products));
    }
    
    public function addAction(){
        $product = new product();
        $form = $this->createCreateForm($product);
        return $this->render('EMMProductBundle:Product:add.html.twig', array('form'=>$form->createView()));
        
    }
    
    private function createCreateForm(Product $entity){
        
        $form=$this->createForm(new ProductType(),$entity,array('action'=>$this->generateUrl('emm_product_create'),'method' =>'POST'));
        
        return $form;
    }
    public function  createAction(Request $request){
        $product = new Product();
        $form = $this->createCreateForm($product);
        $form->handleRequest($request);
        
        if($form->isValid()){
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($product);
            $em->flush();
            return new RedirectResponse($this->generateUrl('emm_product_index'));
            
        }
       return $this->render('EMMProductBundle:Product:add.html.twig', array('form'=>$form->createView()));
    }
    
    public function editAction($id)
    {
        
        $em=$this->getDoctrine()->getManager();
        $product=$em->getRepository('EMMProductBundle:Product')->find($id);
        if(!$product){
            throw $this->createNotFoundException('Producto no encontrado');
        }
        $form = $this->createEditForm($product);
        
      
        return $this->render('EMMProductBundle:Product:edit.html.twig',array('product'=>$product,'form'=>$form->createView()));
    }
    private function createEditForm(Product $entity){
        
        $form = $this->createForm(new ProductType(),$entity,array('action'=>$this->generateUrl('emm_product_update',array('id'=>$entity->getId())),'method'=>'PUT'));
    return $form;
    }
    
    public function updateAction($id, Request $request){
        
        $em=$this->getDoctrine()->getManager();
        $product = $em->getRepository('EMMProductBundle:Product')->find($id);
        if(!$product){
            throw $this->createNotFoundException('Producto no encontrado');
        }
        $form=$this->createEditForm($product);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
         $em->flush();
            
         echo '<script language="javascript">';
         echo 'alert("Registro actualizado")';
         echo '</script>';       

             
          return new RedirectResponse($this->generateUrl('emm_product_index'));
       
        }
        return $this->render('EMMProductBundle:Product:edit.html.twig', array('product'=>$product,'form'=>$form->createView()));
    }
    
    public function deleteAction(Request $request,$id){
        $em= $this->getDoctrine()->getManager();
        $product= $em->getRepository('EMMProductBundle:Product')->find($id);
         if(!$product){
            throw $this->createNotFoundException('Producto no encontrado');
        }
        $em->remove($product);
        
       
        $em->flush();
       
	return new RedirectResponse($this->generateUrl('emm_product_index'));
              
        
        
    }
}
