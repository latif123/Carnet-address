<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_cd2e5a1362d85f7076de009ee86b4b87c9985b5c6538359f3f67629335db587a extends Twig_Template
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
        $__internal_88ef8dc34fa87d6db8d29002fe5658e8b4a1bad95c776f6fd0afe78a6e75ed29 = $this->env->getExtension("native_profiler");
        $__internal_88ef8dc34fa87d6db8d29002fe5658e8b4a1bad95c776f6fd0afe78a6e75ed29->enter($__internal_88ef8dc34fa87d6db8d29002fe5658e8b4a1bad95c776f6fd0afe78a6e75ed29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_88ef8dc34fa87d6db8d29002fe5658e8b4a1bad95c776f6fd0afe78a6e75ed29->leave($__internal_88ef8dc34fa87d6db8d29002fe5658e8b4a1bad95c776f6fd0afe78a6e75ed29_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
