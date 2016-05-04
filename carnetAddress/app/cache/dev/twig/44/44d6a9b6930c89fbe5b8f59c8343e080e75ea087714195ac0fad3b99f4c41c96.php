<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_1d650efea9cb860d92211679d1c90fe52c05ff793cbe7e860ecc1da35b58e72d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5986828f0fefce476b17c472f9dd7221a4f7850984fa30d7354ae89d109e7f2a = $this->env->getExtension("native_profiler");
        $__internal_5986828f0fefce476b17c472f9dd7221a4f7850984fa30d7354ae89d109e7f2a->enter($__internal_5986828f0fefce476b17c472f9dd7221a4f7850984fa30d7354ae89d109e7f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5986828f0fefce476b17c472f9dd7221a4f7850984fa30d7354ae89d109e7f2a->leave($__internal_5986828f0fefce476b17c472f9dd7221a4f7850984fa30d7354ae89d109e7f2a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d3572bad95ab52d81c7229e6d8e3b57a67a9b9f76b62d0e01312cbe808d26c0f = $this->env->getExtension("native_profiler");
        $__internal_d3572bad95ab52d81c7229e6d8e3b57a67a9b9f76b62d0e01312cbe808d26c0f->enter($__internal_d3572bad95ab52d81c7229e6d8e3b57a67a9b9f76b62d0e01312cbe808d26c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Register";
        
        $__internal_d3572bad95ab52d81c7229e6d8e3b57a67a9b9f76b62d0e01312cbe808d26c0f->leave($__internal_d3572bad95ab52d81c7229e6d8e3b57a67a9b9f76b62d0e01312cbe808d26c0f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cd6775548799aedad8e789917a5067e4fca61c3c8ce7e6c7d72a59605c122d4b = $this->env->getExtension("native_profiler");
        $__internal_cd6775548799aedad8e789917a5067e4fca61c3c8ce7e6c7d72a59605c122d4b->enter($__internal_cd6775548799aedad8e789917a5067e4fca61c3c8ce7e6c7d72a59605c122d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 6)->display($context);
        
        $__internal_cd6775548799aedad8e789917a5067e4fca61c3c8ce7e6c7d72a59605c122d4b->leave($__internal_cd6775548799aedad8e789917a5067e4fca61c3c8ce7e6c7d72a59605c122d4b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block title %}Register{% endblock %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
