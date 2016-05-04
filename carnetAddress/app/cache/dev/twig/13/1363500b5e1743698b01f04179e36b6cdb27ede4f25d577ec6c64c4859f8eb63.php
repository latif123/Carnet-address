<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_e7ed5f4a1623a4388c2ae0fd0cb45fadf29d7ba5072c99631967f9f763f39a5f extends Twig_Template
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
        $__internal_144c8b571db0e927b70a89a7a3dabf2104b2789ad7940287c21aa5919a532974 = $this->env->getExtension("native_profiler");
        $__internal_144c8b571db0e927b70a89a7a3dabf2104b2789ad7940287c21aa5919a532974->enter($__internal_144c8b571db0e927b70a89a7a3dabf2104b2789ad7940287c21aa5919a532974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "


<div class=\"row \"><br><br><br><br>
    <div class=\"col s12 m4 offset-m4\">
        <div class=\"card-panel\">
            <h5 class=\"header2 upper center\">Register</h5>
            <div class=\"row\">

                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "testmail"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            echo "                    <div id=\"card-alert\" class=\"card red\">
                        <div class=\"card-content white-text\">
                            <p><i class=\"mdi-alert-error\"></i> ";
            // line 14
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo " </p>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
                ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"row\"><!-- name-->
                        <div class=\"input-field col s12\">
                            <i class=\"mdi-action-account-circle prefix\"></i>
                            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "
                            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label', array("label" => "Username"));
        echo "
                            <span class=\"help-block red-text\">
                                <strong>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "</strong>
                            </span>
                        </div>
                    </div>
                    <div class=\"row\"><!--email-->
                        <div class=\"input-field col s12\">
                            <i class=\"mdi-communication-email prefix\"></i>
                            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
                            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label" => "E-mail"));
        echo "
                            <span class=\"help-block red-text\">
                                <strong>";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "</strong>
                            </span>
                        </div>
                    </div>
                    <div class=\"row \"><!--password-->
                        <div class=\"input-field col s12\">
                            <i class=\"mdi-action-lock-outline prefix\"></i>
                            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget');
        echo "
                            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), 'label', array("label" => "Password"));
        echo "
                            <span class=\"help-block red-text\">
                                <strong>";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), 'errors');
        echo "</strong>
                            </span>
                        </div>
                    </div>
                    <div class=\"row \"><!--password_confirmation-->
                        <div class=\"input-field col s12\">
                            <i class=\"mdi-action-lock-outline prefix\"></i>
                            ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget');
        echo "
                            ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), 'label', array("label" => "Confirm Password"));
        echo "
                            <span class=\"help-block red-text\">
                                <strong></strong>
                            </span>
                        </div>
                    </div>
                    <div class=\"row\"><!--button-->
                        <div class=\"input-field col s12\">
                            <button class=\"btn cyan waves-effect waves-light right\" type=\"submit\" name=\"action\">";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "
                                <i class=\"mdi-content-send right\"></i>
                            </button>
                        </div>
                    </div>
                ";
        // line 67
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
</div>";
        
        $__internal_144c8b571db0e927b70a89a7a3dabf2104b2789ad7940287c21aa5919a532974->leave($__internal_144c8b571db0e927b70a89a7a3dabf2104b2789ad7940287c21aa5919a532974_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 67,  133 => 62,  122 => 54,  118 => 53,  108 => 46,  103 => 44,  99 => 43,  89 => 36,  84 => 34,  80 => 33,  70 => 26,  65 => 24,  61 => 23,  54 => 19,  51 => 18,  41 => 14,  37 => 12,  33 => 11,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* */
/* */
/* <div class="row "><br><br><br><br>*/
/*     <div class="col s12 m4 offset-m4">*/
/*         <div class="card-panel">*/
/*             <h5 class="header2 upper center">Register</h5>*/
/*             <div class="row">*/
/* */
/*                 {% for message in app.session.flashbag.get('testmail') %}*/
/*                     <div id="card-alert" class="card red">*/
/*                         <div class="card-content white-text">*/
/*                             <p><i class="mdi-alert-error"></i> {{ message }} </p>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endfor %}*/
/* */
/*                 {{ form_start(form) }}*/
/*                     <div class="row"><!-- name-->*/
/*                         <div class="input-field col s12">*/
/*                             <i class="mdi-action-account-circle prefix"></i>*/
/*                             {{ form_widget(form.username) }}*/
/*                             {{ form_label(form.username, 'Username') }}*/
/*                             <span class="help-block red-text">*/
/*                                 <strong>{{ form_errors(form.username) }}</strong>*/
/*                             </span>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="row"><!--email-->*/
/*                         <div class="input-field col s12">*/
/*                             <i class="mdi-communication-email prefix"></i>*/
/*                             {{ form_widget(form.email) }}*/
/*                             {{ form_label(form.email, 'E-mail') }}*/
/*                             <span class="help-block red-text">*/
/*                                 <strong>{{ form_errors(form.email) }}</strong>*/
/*                             </span>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="row "><!--password-->*/
/*                         <div class="input-field col s12">*/
/*                             <i class="mdi-action-lock-outline prefix"></i>*/
/*                             {{ form_widget(form.plainPassword.first) }}*/
/*                             {{ form_label(form.plainPassword, 'Password') }}*/
/*                             <span class="help-block red-text">*/
/*                                 <strong>{{ form_errors(form.plainPassword) }}</strong>*/
/*                             </span>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="row "><!--password_confirmation-->*/
/*                         <div class="input-field col s12">*/
/*                             <i class="mdi-action-lock-outline prefix"></i>*/
/*                             {{ form_widget(form.plainPassword.second) }}*/
/*                             {{ form_label(form.plainPassword, 'Confirm Password') }}*/
/*                             <span class="help-block red-text">*/
/*                                 <strong></strong>*/
/*                             </span>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="row"><!--button-->*/
/*                         <div class="input-field col s12">*/
/*                             <button class="btn cyan waves-effect waves-light right" type="submit" name="action">{{ 'registration.submit'|trans }}*/
/*                                 <i class="mdi-content-send right"></i>*/
/*                             </button>*/
/*                         </div>*/
/*                     </div>*/
/*                 {{ form_end(form) }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
