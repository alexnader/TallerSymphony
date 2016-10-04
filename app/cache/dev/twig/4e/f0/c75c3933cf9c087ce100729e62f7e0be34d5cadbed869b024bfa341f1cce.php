<?php

/* EMMProductBundle:Product:index.html.twig */
class __TwigTemplate_4ef0c75c3933cf9c087ce100729e62f7e0be34d5cadbed869b024bfa341f1cce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
 <div class=\"container\">
     <div class=\"col-md-12\">
         <div class=\"page-header margin-none\">
             <h2 class=\"padding-none\">Productos</h2>
             <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("emm_product_add");
        echo "\" class=\"btn btn-success\">Add</a>
         </div>
         <div class=\"table-responsive\">
         
    <table class=\"table table-striped table-hover\">
    <tr>
        <th>Codigo</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Marca</th>
        <th>Categoria</th>
        <th>precio</th>        
    </tr>
    ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 22
            echo "        <tr>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "codigo"), "html", null, true);
            echo "</td>
            <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "nombre"), "html", null, true);
            echo "</td>
            <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "descripcion"), "html", null, true);
            echo "</td>
            <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "marca"), "html", null, true);
            echo "</td>
            <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "categoria"), "html", null, true);
            echo "</td>
            <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "precio"), "html", null, true);
            echo "</td>
            <td>
                
                <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("emm_product_edit", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">Edit</a>
                <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("emm_product_delete", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-danger btn-delete\" onclick=\"return confirm('Seguro que desea eliminar el registro?')\">Delete</a>
            </td>
          </tr>
            
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        
            
    </tbody>
    </table>
         </div>
        
    </div>
 </div>
</table>
";
    }

    public function getTemplateName()
    {
        return "EMMProductBundle:Product:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 37,  93 => 32,  89 => 31,  83 => 28,  79 => 27,  75 => 26,  71 => 25,  67 => 24,  63 => 23,  60 => 22,  56 => 21,  40 => 8,  31 => 3,  28 => 2,);
    }
}
