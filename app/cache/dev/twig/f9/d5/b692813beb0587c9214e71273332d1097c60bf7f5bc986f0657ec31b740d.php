<?php

/* menu.html.twig */
class __TwigTemplate_f9d5b692813beb0587c9214e71273332d1097c60bf7f5bc986f0657ec31b740d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<nav class=\"navbar navbar-inverse\">
  <div class=\"container-fluid container\">
    <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("emm_product_index");
        echo "\">Taller Symfony</a>
    </div>
      <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
          <ul class=\"nav navbar-nav\">
               <li class=\"dropdown\">
                   <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Productos <span class=\"caret\"></span></a>
            <ul class=\"dropdown-menu\">
                <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("emm_product_index");
        echo "\">Listar Productos</a></li>
                <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("emm_product_add");
        echo "\">Nuevo Producto</a></li>
            </ul>
                                   </li>
                                   </div>
      
  </div></nav>";
    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 10,  19 => 1,  86 => 17,  76 => 14,  73 => 13,  62 => 7,  59 => 6,  53 => 5,  47 => 23,  44 => 18,  42 => 13,  35 => 10,  33 => 6,  29 => 5,  23 => 1,  104 => 37,  93 => 19,  89 => 18,  83 => 16,  79 => 27,  75 => 26,  71 => 25,  67 => 8,  63 => 23,  60 => 22,  56 => 21,  40 => 17,  31 => 3,  28 => 2,);
    }
}
