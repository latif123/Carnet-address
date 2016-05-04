<?php

/* RAFAcarnetAddressBundle:dashboard:index.html.twig */
class __TwigTemplate_d12fd7bdaefa6a513d502decc15780dc662b2b61799d59d74383eb2e86bdc247 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "RAFAcarnetAddressBundle:dashboard:index.html.twig", 1);
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
        $__internal_47ae9e043f42b07b39f0af9194f0f944c0a547fa30b29a676a32559b2dba5c9e = $this->env->getExtension("native_profiler");
        $__internal_47ae9e043f42b07b39f0af9194f0f944c0a547fa30b29a676a32559b2dba5c9e->enter($__internal_47ae9e043f42b07b39f0af9194f0f944c0a547fa30b29a676a32559b2dba5c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RAFAcarnetAddressBundle:dashboard:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47ae9e043f42b07b39f0af9194f0f944c0a547fa30b29a676a32559b2dba5c9e->leave($__internal_47ae9e043f42b07b39f0af9194f0f944c0a547fa30b29a676a32559b2dba5c9e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_68322a6c24f9f5a362e4f18dbc786f34373e6d7ddd37db01063e711889b63dc1 = $this->env->getExtension("native_profiler");
        $__internal_68322a6c24f9f5a362e4f18dbc786f34373e6d7ddd37db01063e711889b63dc1->enter($__internal_68322a6c24f9f5a362e4f18dbc786f34373e6d7ddd37db01063e711889b63dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "dashboard";
        
        $__internal_68322a6c24f9f5a362e4f18dbc786f34373e6d7ddd37db01063e711889b63dc1->leave($__internal_68322a6c24f9f5a362e4f18dbc786f34373e6d7ddd37db01063e711889b63dc1_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_afb7318567ace0d4a13c29a759ff0b29268a784c27f6ba179dc1456ce9599795 = $this->env->getExtension("native_profiler");
        $__internal_afb7318567ace0d4a13c29a759ff0b29268a784c27f6ba179dc1456ce9599795->enter($__internal_afb7318567ace0d4a13c29a759ff0b29268a784c27f6ba179dc1456ce9599795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
    ";
        // line 7
        if (twig_test_empty((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")))) {
            // line 8
            echo "        <div id=\"profile-page-header\" class=\"card\">
            <div class=\"card-image waves-effect waves-block waves-light\">
                <img class=\"activator\" src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/user-profile-bg.jpg"), "html", null, true);
            echo "\" height=\"300\" alt=\"user background\">
            </div>
            <figure class=\"card-profile-image\">
                <!--img src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/avatar.png"), "html", null, true);
            echo "\" width=\"140\" height=\"140\" alt=\"profile image\" class=\"circle z-depth-2 responsive-img activator\"-->
            </figure>
            <div class=\"card-content\">
                <div class=\"row\">
                    <div class=\"col s2 offset-s2\">
                        <h4 class=\"card-title grey-text upper\">firstname&nbsp;lastname</h4>
                        <p class=\"medium-small grey-text\"><i class=\"mdi-action-perm-identity pink-text text-darken-2\"></i> ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"col s2 center-align\">
                        <h4 class=\"card-title grey-text text-darken-4\">10+</h4>
                        <p class=\"medium-small grey-text\">Work Experience</p>
                    </div>
                    <div class=\"col s2 center-align\">
                        <h4 class=\"card-title grey-text text-darken-4\">6</h4>
                        <p class=\"medium-small grey-text\">Completed Projects</p>
                    </div>
                    <div class=\"col s2 center-align\">
                        <h4 class=\"card-title grey-text text-darken-4\">\$ 1,253,000</h4>
                        <p class=\"medium-small grey-text\">Busness Profit</p>
                    </div>
                    <div class=\"col s2 right-align\"><!-- button action -->
                        <a href=\"";
            // line 34
            echo $this->env->getExtension('routing')->getPath("raf_acarnet_address_dashboard_create");
            echo "\" class=\"btn-floating  waves-effect green darken-2 right\"><!-- edit -->
                            <i class=\"fa fa-plus\"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    ";
        } else {
            // line 42
            echo "        <div id=\"profile-page-header\" class=\"card\">
            <div class=\"card-image waves-effect waves-block waves-light\">
                <img class=\"activator\" src=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/user-profile-bg.jpg"), "html", null, true);
            echo "\" height=\"300\" alt=\"user background\">
            </div>
            <figure class=\"card-profile-image\">
                <!--img src=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/avatar.png"), "html", null, true);
            echo "\" width=\"140\" height=\"140\" alt=\"profile image\" class=\"circle z-depth-2 responsive-img activator\"-->
            </figure>
            <div class=\"card-content\">
                <div class=\"row\">
                    <div class=\"col s2 offset-s2\">
                        <h4 class=\"card-title grey-text text-darken-4 upper\">";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), 0, array()), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), 0, array()), "lastname", array()), "html", null, true);
            echo "</h4>
                        <p class=\"medium-small grey-text\"><i class=\"mdi-action-perm-identity pink-text text-darken-2\"></i> ";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"col s2 center-align\">
                        <h4 class=\"card-title grey-text text-darken-4\">10+</h4>
                        <p class=\"medium-small grey-text\">Work Experience</p>
                    </div>
                    <div class=\"col s2 center-align\">
                        <h4 class=\"card-title grey-text text-darken-4\">6</h4>
                        <p class=\"medium-small grey-text\">Completed Projects</p>
                    </div>
                    <div class=\"col s2 center-align\">
                        <h4 class=\"card-title grey-text text-darken-4\">\$ 1,253,000</h4>
                        <p class=\"medium-small grey-text\">Busness Profit</p>
                    </div>
                    <div class=\"col s2 right-align\"><!-- button action -->
                        <a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("raf_acarnet_address_dashboard_destroy", array("id" => $this->getAttribute($this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), 0, array()), "id", array()))), "html", null, true);
            echo "\" onclick=\"return confirm('Vous etez sur de supprimez tous le compte?')\" class=\"btn-floating  waves-effect red darken-2 right\"><!-- delete -->
                            <i class=\"mdi-action-delete\"></i>
                        </a>
                        <a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("raf_acarnet_address_dashboard_edit", array("id" => $this->getAttribute($this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), 0, array()), "id", array()))), "html", null, true);
            echo "\" class=\"btn-floating  waves-effect blue darken-2 right\"><!-- edit -->
                            <i class=\"mdi-content-create\"></i>
                        </a>
                        <a class=\"btn-floating activator waves-effect pink darken-2 right\"><!-- show -->
                            <i class=\"mdi-action-perm-identity\"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"card-reveal\">
                <p>
                    <span class=\"card-title grey-text text-darken-4 upper\">";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), 0, array()), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), 0, array()), "lastname", array()), "html", null, true);
            echo " <i class=\"mdi-navigation-close right\"></i></span>
                    <span><i class=\"mdi-action-perm-identity cyan-text text-darken-2\"></i> ";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " </span>
                </p>
                <p><i class=\"mdi-action-perm-phone-msg cyan-text text-darken-2\"></i>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), 0, array()), "phone", array()), "html", null, true);
            echo "</p>
                <p><i class=\"mdi-communication-email cyan-text text-darken-2\"></i> ";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
            echo "</p>
                <p><i class=\"mdi-maps-place cyan-text text-darken-2\"></i> ";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")), 0, array()), "address", array()), "html", null, true);
            echo "</p>
            </div>
        </div>
    ";
        }
        // line 91
        echo "


";
        
        $__internal_afb7318567ace0d4a13c29a759ff0b29268a784c27f6ba179dc1456ce9599795->leave($__internal_afb7318567ace0d4a13c29a759ff0b29268a784c27f6ba179dc1456ce9599795_prof);

    }

    public function getTemplateName()
    {
        return "RAFAcarnetAddressBundle:dashboard:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 91,  187 => 87,  183 => 86,  179 => 85,  174 => 83,  168 => 82,  154 => 71,  148 => 68,  130 => 53,  124 => 52,  116 => 47,  110 => 44,  106 => 42,  95 => 34,  77 => 19,  68 => 13,  62 => 10,  58 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}dashboard{% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     {% if info is empty %}*/
/*         <div id="profile-page-header" class="card">*/
/*             <div class="card-image waves-effect waves-block waves-light">*/
/*                 <img class="activator" src="{{ asset('public/img/user-profile-bg.jpg') }}" height="300" alt="user background">*/
/*             </div>*/
/*             <figure class="card-profile-image">*/
/*                 <!--img src="{{ asset('public/img/avatar.png') }}" width="140" height="140" alt="profile image" class="circle z-depth-2 responsive-img activator"-->*/
/*             </figure>*/
/*             <div class="card-content">*/
/*                 <div class="row">*/
/*                     <div class="col s2 offset-s2">*/
/*                         <h4 class="card-title grey-text upper">firstname&nbsp;lastname</h4>*/
/*                         <p class="medium-small grey-text"><i class="mdi-action-perm-identity pink-text text-darken-2"></i> {{ app.user.username }}</p>*/
/*                     </div>*/
/*                     <div class="col s2 center-align">*/
/*                         <h4 class="card-title grey-text text-darken-4">10+</h4>*/
/*                         <p class="medium-small grey-text">Work Experience</p>*/
/*                     </div>*/
/*                     <div class="col s2 center-align">*/
/*                         <h4 class="card-title grey-text text-darken-4">6</h4>*/
/*                         <p class="medium-small grey-text">Completed Projects</p>*/
/*                     </div>*/
/*                     <div class="col s2 center-align">*/
/*                         <h4 class="card-title grey-text text-darken-4">$ 1,253,000</h4>*/
/*                         <p class="medium-small grey-text">Busness Profit</p>*/
/*                     </div>*/
/*                     <div class="col s2 right-align"><!-- button action -->*/
/*                         <a href="{{ path('raf_acarnet_address_dashboard_create') }}" class="btn-floating  waves-effect green darken-2 right"><!-- edit -->*/
/*                             <i class="fa fa-plus"></i>*/
/*                         </a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     {% else %}*/
/*         <div id="profile-page-header" class="card">*/
/*             <div class="card-image waves-effect waves-block waves-light">*/
/*                 <img class="activator" src="{{ asset('public/img/user-profile-bg.jpg') }}" height="300" alt="user background">*/
/*             </div>*/
/*             <figure class="card-profile-image">*/
/*                 <!--img src="{{ asset('public/img/avatar.png') }}" width="140" height="140" alt="profile image" class="circle z-depth-2 responsive-img activator"-->*/
/*             </figure>*/
/*             <div class="card-content">*/
/*                 <div class="row">*/
/*                     <div class="col s2 offset-s2">*/
/*                         <h4 class="card-title grey-text text-darken-4 upper">{{ info.0.firstname }} {{ info.0.lastname }}</h4>*/
/*                         <p class="medium-small grey-text"><i class="mdi-action-perm-identity pink-text text-darken-2"></i> {{ app.user.username }}</p>*/
/*                     </div>*/
/*                     <div class="col s2 center-align">*/
/*                         <h4 class="card-title grey-text text-darken-4">10+</h4>*/
/*                         <p class="medium-small grey-text">Work Experience</p>*/
/*                     </div>*/
/*                     <div class="col s2 center-align">*/
/*                         <h4 class="card-title grey-text text-darken-4">6</h4>*/
/*                         <p class="medium-small grey-text">Completed Projects</p>*/
/*                     </div>*/
/*                     <div class="col s2 center-align">*/
/*                         <h4 class="card-title grey-text text-darken-4">$ 1,253,000</h4>*/
/*                         <p class="medium-small grey-text">Busness Profit</p>*/
/*                     </div>*/
/*                     <div class="col s2 right-align"><!-- button action -->*/
/*                         <a href="{{ path('raf_acarnet_address_dashboard_destroy', {'id':info.0.id}) }}" onclick="return confirm('Vous etez sur de supprimez tous le compte?')" class="btn-floating  waves-effect red darken-2 right"><!-- delete -->*/
/*                             <i class="mdi-action-delete"></i>*/
/*                         </a>*/
/*                         <a href="{{ path('raf_acarnet_address_dashboard_edit', {'id':info.0.id}) }}" class="btn-floating  waves-effect blue darken-2 right"><!-- edit -->*/
/*                             <i class="mdi-content-create"></i>*/
/*                         </a>*/
/*                         <a class="btn-floating activator waves-effect pink darken-2 right"><!-- show -->*/
/*                             <i class="mdi-action-perm-identity"></i>*/
/*                         </a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="card-reveal">*/
/*                 <p>*/
/*                     <span class="card-title grey-text text-darken-4 upper">{{ info.0.firstname }} {{ info.0.lastname }} <i class="mdi-navigation-close right"></i></span>*/
/*                     <span><i class="mdi-action-perm-identity cyan-text text-darken-2"></i> {{ app.user.username }} </span>*/
/*                 </p>*/
/*                 <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i>{{ info.0.phone }}</p>*/
/*                 <p><i class="mdi-communication-email cyan-text text-darken-2"></i> {{ app.user.email }}</p>*/
/*                 <p><i class="mdi-maps-place cyan-text text-darken-2"></i> {{ info.0.address }}</p>*/
/*             </div>*/
/*         </div>*/
/*     {% endif %}*/
/* */
/* */
/* */
/* {% endblock %}*/
