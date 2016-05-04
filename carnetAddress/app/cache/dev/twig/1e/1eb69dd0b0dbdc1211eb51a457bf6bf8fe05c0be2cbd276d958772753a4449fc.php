<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_99bd963d732725f70647df8a5f8dc0359dcd8277bf5cb218c16c2c9abe39e8c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c02ca7b4de2b25823564eedbd3d7edbc7937dd1ba03f6d20527b66836bd14890 = $this->env->getExtension("native_profiler");
        $__internal_c02ca7b4de2b25823564eedbd3d7edbc7937dd1ba03f6d20527b66836bd14890->enter($__internal_c02ca7b4de2b25823564eedbd3d7edbc7937dd1ba03f6d20527b66836bd14890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c02ca7b4de2b25823564eedbd3d7edbc7937dd1ba03f6d20527b66836bd14890->leave($__internal_c02ca7b4de2b25823564eedbd3d7edbc7937dd1ba03f6d20527b66836bd14890_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f342eb7f29c2b7a2f2734005a1b114f2bedcf3a1dfb8db337fe4120dd8c6d4f9 = $this->env->getExtension("native_profiler");
        $__internal_f342eb7f29c2b7a2f2734005a1b114f2bedcf3a1dfb8db337fe4120dd8c6d4f9->enter($__internal_f342eb7f29c2b7a2f2734005a1b114f2bedcf3a1dfb8db337fe4120dd8c6d4f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <br><br><br><br>
    <div class=\"card green lighten-4\">
        <br/>
        <p class=\"center green-text\"><b>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</b>, your account is now activated.</p>
        ";
        // line 10
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 11
            echo "        <p class=\"center green-text \"><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        // line 13
        echo "        <br/>
    </div>
";
        
        $__internal_f342eb7f29c2b7a2f2734005a1b114f2bedcf3a1dfb8db337fe4120dd8c6d4f9->leave($__internal_f342eb7f29c2b7a2f2734005a1b114f2bedcf3a1dfb8db337fe4120dd8c6d4f9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 13,  51 => 11,  49 => 10,  45 => 9,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <br><br><br><br>*/
/*     <div class="card green lighten-4">*/
/*         <br/>*/
/*         <p class="center green-text"><b>{{ user.username }}</b>, your account is now activated.</p>*/
/*         {% if targetUrl %}*/
/*         <p class="center green-text "><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/*         <br/>*/
/*     </div>*/
/* {% endblock fos_user_content %}*/
/* */
