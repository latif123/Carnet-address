<?php

/* RAFAcarnetAddressBundle:Home:index.html.twig */
class __TwigTemplate_516aa1bf343de9d9e8e3321e2dbbdb6e630161aee1b21b3dd8821180b2f3d0ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "RAFAcarnetAddressBundle:Home:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7edbc0195e9c4d56ba430f11f48dfd247aaf13c5f158f1ea14ba50928e7dbfef = $this->env->getExtension("native_profiler");
        $__internal_7edbc0195e9c4d56ba430f11f48dfd247aaf13c5f158f1ea14ba50928e7dbfef->enter($__internal_7edbc0195e9c4d56ba430f11f48dfd247aaf13c5f158f1ea14ba50928e7dbfef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RAFAcarnetAddressBundle:Home:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7edbc0195e9c4d56ba430f11f48dfd247aaf13c5f158f1ea14ba50928e7dbfef->leave($__internal_7edbc0195e9c4d56ba430f11f48dfd247aaf13c5f158f1ea14ba50928e7dbfef_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9726d7fef0e78f24234069f9fa9dc368f48b623ff963b7dfae97ba308ced800e = $this->env->getExtension("native_profiler");
        $__internal_9726d7fef0e78f24234069f9fa9dc368f48b623ff963b7dfae97ba308ced800e->enter($__internal_9726d7fef0e78f24234069f9fa9dc368f48b623ff963b7dfae97ba308ced800e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Homepage";
        
        $__internal_9726d7fef0e78f24234069f9fa9dc368f48b623ff963b7dfae97ba308ced800e->leave($__internal_9726d7fef0e78f24234069f9fa9dc368f48b623ff963b7dfae97ba308ced800e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_99a4a5d98d3fff34dfabf388764e6c42e4e4446f535af008ba5ec62617b99a7d = $this->env->getExtension("native_profiler");
        $__internal_99a4a5d98d3fff34dfabf388764e6c42e4e4446f535af008ba5ec62617b99a7d->enter($__internal_99a4a5d98d3fff34dfabf388764e6c42e4e4446f535af008ba5ec62617b99a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
    <div class=\"card amber darken-2\">
        <div class=\"card-content white-text center-align\">
            <p class=\"card-title\"><i class=\" mdi-social-group-add\"></i> ";
        // line 9
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["info"]) ? $context["info"] : $this->getContext($context, "info"))), "html", null, true);
        echo "</p>
            <p>Users</p>
        </div>
    </div>

    <div class=\"card\">
        <nav>
            <div class=\"nav-wrapper\">
                <form>
                    <div class=\"input-field\">
                        <input id=\"search\" type=\"search\" name=\"query\" placeholder=\"Recherche\" required>
                        <label for=\"search\"><i class=\"material-icons\">search</i></label>
                        <i class=\"material-icons\">close</i>
                    </div>
                </form>
            </div>
        </nav>
    </div>

    <div class=\"card\">
        <ul id=\"profile-page-about-feed\" class=\"collection z-depth-1\">
            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 31
            echo "                <li class=\"collection-item avatar\">
                    <i class=\"fa fa-user circle\"></i>
                    <span class=\"title upper\"><b>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "lastname", array()), "html", null, true);
            echo "</b></span>
                    <p class=\"text-grey\">
                        <span><i class=\"fa fa-map-marker \"></i> ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "address", array()), "html", null, true);
            echo "</span>
                        <br> <span class=\"ultra-small text-grey\"><i class=\"fa fa-mobile \"></i> ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "phone", array()), "html", null, true);
            echo "</span>
                        <br> <span class=\"ultra-small text-grey\"><i class=\"fa fa-link \"></i> ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "website", array()), "html", null, true);
            echo "</span>
                    </p>
                    <a href=\"#!\" class=\"secondary-content\"><i class=\"fa fa-file\"></i></a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </ul>
    </div>

";
        
        $__internal_99a4a5d98d3fff34dfabf388764e6c42e4e4446f535af008ba5ec62617b99a7d->leave($__internal_99a4a5d98d3fff34dfabf388764e6c42e4e4446f535af008ba5ec62617b99a7d_prof);

    }

    public function getTemplateName()
    {
        return "RAFAcarnetAddressBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 42,  105 => 37,  101 => 36,  97 => 35,  90 => 33,  86 => 31,  82 => 30,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}Homepage{% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     <div class="card amber darken-2">*/
/*         <div class="card-content white-text center-align">*/
/*             <p class="card-title"><i class=" mdi-social-group-add"></i> {{ info|length }}</p>*/
/*             <p>Users</p>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="card">*/
/*         <nav>*/
/*             <div class="nav-wrapper">*/
/*                 <form>*/
/*                     <div class="input-field">*/
/*                         <input id="search" type="search" name="query" placeholder="Recherche" required>*/
/*                         <label for="search"><i class="material-icons">search</i></label>*/
/*                         <i class="material-icons">close</i>*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*         </nav>*/
/*     </div>*/
/* */
/*     <div class="card">*/
/*         <ul id="profile-page-about-feed" class="collection z-depth-1">*/
/*             {% for item in info %}*/
/*                 <li class="collection-item avatar">*/
/*                     <i class="fa fa-user circle"></i>*/
/*                     <span class="title upper"><b>{{ item.firstname }} {{ item.lastname }}</b></span>*/
/*                     <p class="text-grey">*/
/*                         <span><i class="fa fa-map-marker "></i> {{ item.address }}</span>*/
/*                         <br> <span class="ultra-small text-grey"><i class="fa fa-mobile "></i> {{ item.phone }}</span>*/
/*                         <br> <span class="ultra-small text-grey"><i class="fa fa-link "></i> {{ item.website }}</span>*/
/*                     </p>*/
/*                     <a href="#!" class="secondary-content"><i class="fa fa-file"></i></a>*/
/*                 </li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*     </div>*/
/* */
/* {% endblock %}*/
