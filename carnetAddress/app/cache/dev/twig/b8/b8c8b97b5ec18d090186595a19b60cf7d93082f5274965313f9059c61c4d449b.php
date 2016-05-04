<?php

/* RAFAcarnetAddressBundle:dashboard:edit.html.twig */
class __TwigTemplate_6b469c5b991d31b65c2118065c3fededef699fa9fb8943f7afb687bc8954c09a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "RAFAcarnetAddressBundle:dashboard:edit.html.twig", 1);
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
        $__internal_3dc14a08d1ad96c78d4dc8105868ef33b9940fc7296574dc2707580d71c11807 = $this->env->getExtension("native_profiler");
        $__internal_3dc14a08d1ad96c78d4dc8105868ef33b9940fc7296574dc2707580d71c11807->enter($__internal_3dc14a08d1ad96c78d4dc8105868ef33b9940fc7296574dc2707580d71c11807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RAFAcarnetAddressBundle:dashboard:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3dc14a08d1ad96c78d4dc8105868ef33b9940fc7296574dc2707580d71c11807->leave($__internal_3dc14a08d1ad96c78d4dc8105868ef33b9940fc7296574dc2707580d71c11807_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f930356c519f06d8f768ec57c00b39b601df35ba6dc3d70a472afcca2d09f479 = $this->env->getExtension("native_profiler");
        $__internal_f930356c519f06d8f768ec57c00b39b601df35ba6dc3d70a472afcca2d09f479->enter($__internal_f930356c519f06d8f768ec57c00b39b601df35ba6dc3d70a472afcca2d09f479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "dashboard";
        
        $__internal_f930356c519f06d8f768ec57c00b39b601df35ba6dc3d70a472afcca2d09f479->leave($__internal_f930356c519f06d8f768ec57c00b39b601df35ba6dc3d70a472afcca2d09f479_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_c1e4dbc89a6278117343aaa88e68fdfd4d2201bc50534eb74c9f9f39116d2583 = $this->env->getExtension("native_profiler");
        $__internal_c1e4dbc89a6278117343aaa88e68fdfd4d2201bc50534eb74c9f9f39116d2583->enter($__internal_c1e4dbc89a6278117343aaa88e68fdfd4d2201bc50534eb74c9f9f39116d2583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
    <div class=\"row \"><br><br>
        <div class=\"col s12 m8 offset-m2\">
            <div class=\"card-panel\">
                <h5 class=\"header2 upper center\">Edit Informations</h5>
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "edit"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            echo "                    <div class=\"card\">
                        <p class=\"green white-text center\">";
            // line 13
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "                <div class=\"row\">

                    ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

                        <div class=\"row\"><!-- firstname -->
                            <div class=\"input-field col s6\">
                                <i class=\"mdi-action-account-circle prefix\"></i>
                                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'widget');
        echo "
                                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'label', array("label" => "First name"));
        echo "
                                <span class=\"help-block red-text\">
                                    <strong>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'errors');
        echo "</strong>
                                </span>
                            </div>
                            <!-- lastname -->
                            <div class=\"input-field col s6\">
                                <i class=\"mdi-action-account-circle prefix\"></i>
                                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'widget');
        echo "
                                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'label', array("label" => "Last name"));
        echo "
                                <span class=\"help-block red-text\">
                                    <strong>";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'errors');
        echo "</strong>
                                </span>
                            </div>
                        </div>

                        <div class=\"row\"><!-- adresse-->
                            <div class=\"input-field col s6\">
                                <i class=\"mdi-maps-place prefix\"></i>
                                ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'widget');
        echo "
                                ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'label', array("label" => "Address"));
        echo "
                                <span class=\"help-block red-text\">
                                    <strong>";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'errors');
        echo "</strong>
                                </span>
                            </div>
                            <!-- phone-->
                            <div class=\"input-field col s6\">
                                <i class=\"mdi-hardware-smartphone prefix\"></i>
                                ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'widget');
        echo "
                                ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'label', array("label" => "Phone"));
        echo "
                                <span class=\"help-block red-text\">
                                    <strong>";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'errors');
        echo "</strong>
                                </span>
                            </div>
                        </div>

                        <div class=\"row\"><!-- website-->
                            <div class=\"input-field col s12\">
                                <i class=\"mdi-editor-insert-link prefix\"></i>
                                ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "website", array()), 'widget');
        echo "
                                ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "website", array()), 'label', array("label" => "Website"));
        echo "
                                <span class=\"help-block red-text\">
                                    <strong>";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "website", array()), 'errors');
        echo "</strong>
                                </span>
                            </div>
                        </div>

                        <div class=\"row\"><!--button-->
                            <div class=\"input-field col s12\">
                                <button class=\"btn cyan waves-effect waves-light right\" type=\"submit\" name=\"action\">Submit
                                    <i class=\"mdi-content-send right\"></i>
                                </button>
                            </div>
                        </div>

                    ";
        // line 79
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_c1e4dbc89a6278117343aaa88e68fdfd4d2201bc50534eb74c9f9f39116d2583->leave($__internal_c1e4dbc89a6278117343aaa88e68fdfd4d2201bc50534eb74c9f9f39116d2583_prof);

    }

    public function getTemplateName()
    {
        return "RAFAcarnetAddressBundle:dashboard:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 79,  173 => 66,  168 => 64,  164 => 63,  153 => 55,  148 => 53,  144 => 52,  135 => 46,  130 => 44,  126 => 43,  115 => 35,  110 => 33,  106 => 32,  97 => 26,  92 => 24,  88 => 23,  80 => 18,  76 => 16,  67 => 13,  64 => 12,  60 => 11,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}dashboard{% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     <div class="row "><br><br>*/
/*         <div class="col s12 m8 offset-m2">*/
/*             <div class="card-panel">*/
/*                 <h5 class="header2 upper center">Edit Informations</h5>*/
/*                 {% for message in app.session.flashbag.get('edit') %}*/
/*                     <div class="card">*/
/*                         <p class="green white-text center">{{ message }}</p>*/
/*                     </div>*/
/*                 {% endfor %}*/
/*                 <div class="row">*/
/* */
/*                     {{ form_start(form) }}*/
/* */
/*                         <div class="row"><!-- firstname -->*/
/*                             <div class="input-field col s6">*/
/*                                 <i class="mdi-action-account-circle prefix"></i>*/
/*                                 {{ form_widget(form.firstname) }}*/
/*                                 {{ form_label(form.firstname, 'First name') }}*/
/*                                 <span class="help-block red-text">*/
/*                                     <strong>{{ form_errors(form.firstname) }}</strong>*/
/*                                 </span>*/
/*                             </div>*/
/*                             <!-- lastname -->*/
/*                             <div class="input-field col s6">*/
/*                                 <i class="mdi-action-account-circle prefix"></i>*/
/*                                 {{ form_widget(form.lastname) }}*/
/*                                 {{ form_label(form.lastname, 'Last name') }}*/
/*                                 <span class="help-block red-text">*/
/*                                     <strong>{{ form_errors(form.lastname) }}</strong>*/
/*                                 </span>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="row"><!-- adresse-->*/
/*                             <div class="input-field col s6">*/
/*                                 <i class="mdi-maps-place prefix"></i>*/
/*                                 {{ form_widget(form.address) }}*/
/*                                 {{ form_label(form.address, 'Address') }}*/
/*                                 <span class="help-block red-text">*/
/*                                     <strong>{{ form_errors(form.address) }}</strong>*/
/*                                 </span>*/
/*                             </div>*/
/*                             <!-- phone-->*/
/*                             <div class="input-field col s6">*/
/*                                 <i class="mdi-hardware-smartphone prefix"></i>*/
/*                                 {{ form_widget(form.phone) }}*/
/*                                 {{ form_label(form.phone, 'Phone') }}*/
/*                                 <span class="help-block red-text">*/
/*                                     <strong>{{ form_errors(form.phone) }}</strong>*/
/*                                 </span>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="row"><!-- website-->*/
/*                             <div class="input-field col s12">*/
/*                                 <i class="mdi-editor-insert-link prefix"></i>*/
/*                                 {{ form_widget(form.website) }}*/
/*                                 {{ form_label(form.website, 'Website') }}*/
/*                                 <span class="help-block red-text">*/
/*                                     <strong>{{ form_errors(form.website) }}</strong>*/
/*                                 </span>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="row"><!--button-->*/
/*                             <div class="input-field col s12">*/
/*                                 <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit*/
/*                                     <i class="mdi-content-send right"></i>*/
/*                                 </button>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                     {{ form_end(form) }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
