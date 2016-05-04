<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b7246e4f2b51b5bdd3ca9566dbc6974737e23ebbef8f345196ca22b0f6032489 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d66e86f5e3e54ed191cf3b9e946bec971acfa93ad14b8ba5d301b9c85ae32fa = $this->env->getExtension("native_profiler");
        $__internal_7d66e86f5e3e54ed191cf3b9e946bec971acfa93ad14b8ba5d301b9c85ae32fa->enter($__internal_7d66e86f5e3e54ed191cf3b9e946bec971acfa93ad14b8ba5d301b9c85ae32fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d66e86f5e3e54ed191cf3b9e946bec971acfa93ad14b8ba5d301b9c85ae32fa->leave($__internal_7d66e86f5e3e54ed191cf3b9e946bec971acfa93ad14b8ba5d301b9c85ae32fa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_37f69981dcd195114a626bed5d1e8a7187d8d7e2f382bf39c119253e9f4c849d = $this->env->getExtension("native_profiler");
        $__internal_37f69981dcd195114a626bed5d1e8a7187d8d7e2f382bf39c119253e9f4c849d->enter($__internal_37f69981dcd195114a626bed5d1e8a7187d8d7e2f382bf39c119253e9f4c849d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_37f69981dcd195114a626bed5d1e8a7187d8d7e2f382bf39c119253e9f4c849d->leave($__internal_37f69981dcd195114a626bed5d1e8a7187d8d7e2f382bf39c119253e9f4c849d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_30ff0878f1e934116508c89f1abcd0855dbfe9d54c5c29ef30d51ad02131ca99 = $this->env->getExtension("native_profiler");
        $__internal_30ff0878f1e934116508c89f1abcd0855dbfe9d54c5c29ef30d51ad02131ca99->enter($__internal_30ff0878f1e934116508c89f1abcd0855dbfe9d54c5c29ef30d51ad02131ca99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_30ff0878f1e934116508c89f1abcd0855dbfe9d54c5c29ef30d51ad02131ca99->leave($__internal_30ff0878f1e934116508c89f1abcd0855dbfe9d54c5c29ef30d51ad02131ca99_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0024bed7d42697f309996ca0048cb1bf596802e9abfa487914395b32e09bff16 = $this->env->getExtension("native_profiler");
        $__internal_0024bed7d42697f309996ca0048cb1bf596802e9abfa487914395b32e09bff16->enter($__internal_0024bed7d42697f309996ca0048cb1bf596802e9abfa487914395b32e09bff16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0024bed7d42697f309996ca0048cb1bf596802e9abfa487914395b32e09bff16->leave($__internal_0024bed7d42697f309996ca0048cb1bf596802e9abfa487914395b32e09bff16_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
