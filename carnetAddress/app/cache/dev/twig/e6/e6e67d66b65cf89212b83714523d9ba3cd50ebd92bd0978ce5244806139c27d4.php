<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_13503c501f68e03d88bf858e628a0b68eae89696445fee4ab5189e01fb45c70b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46e9491cf7086a41732d02894a6c2fc1c306f230cc3c82d998e0cdbb854884bb = $this->env->getExtension("native_profiler");
        $__internal_46e9491cf7086a41732d02894a6c2fc1c306f230cc3c82d998e0cdbb854884bb->enter($__internal_46e9491cf7086a41732d02894a6c2fc1c306f230cc3c82d998e0cdbb854884bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46e9491cf7086a41732d02894a6c2fc1c306f230cc3c82d998e0cdbb854884bb->leave($__internal_46e9491cf7086a41732d02894a6c2fc1c306f230cc3c82d998e0cdbb854884bb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3a2d06921bff4bb24e9de7fa41b16c3842ddeb77f9a98df059e4a9e32dd92bef = $this->env->getExtension("native_profiler");
        $__internal_3a2d06921bff4bb24e9de7fa41b16c3842ddeb77f9a98df059e4a9e32dd92bef->enter($__internal_3a2d06921bff4bb24e9de7fa41b16c3842ddeb77f9a98df059e4a9e32dd92bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3a2d06921bff4bb24e9de7fa41b16c3842ddeb77f9a98df059e4a9e32dd92bef->leave($__internal_3a2d06921bff4bb24e9de7fa41b16c3842ddeb77f9a98df059e4a9e32dd92bef_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_019385b5e547729cd8ffe80dda00d43063fcc54201ca20bc9f8d9249f792c57a = $this->env->getExtension("native_profiler");
        $__internal_019385b5e547729cd8ffe80dda00d43063fcc54201ca20bc9f8d9249f792c57a->enter($__internal_019385b5e547729cd8ffe80dda00d43063fcc54201ca20bc9f8d9249f792c57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_019385b5e547729cd8ffe80dda00d43063fcc54201ca20bc9f8d9249f792c57a->leave($__internal_019385b5e547729cd8ffe80dda00d43063fcc54201ca20bc9f8d9249f792c57a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6b8f58b58db84e42d36ddaf7b930e109d49c0deb55df99d20b155d9ee705c829 = $this->env->getExtension("native_profiler");
        $__internal_6b8f58b58db84e42d36ddaf7b930e109d49c0deb55df99d20b155d9ee705c829->enter($__internal_6b8f58b58db84e42d36ddaf7b930e109d49c0deb55df99d20b155d9ee705c829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6b8f58b58db84e42d36ddaf7b930e109d49c0deb55df99d20b155d9ee705c829->leave($__internal_6b8f58b58db84e42d36ddaf7b930e109d49c0deb55df99d20b155d9ee705c829_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
