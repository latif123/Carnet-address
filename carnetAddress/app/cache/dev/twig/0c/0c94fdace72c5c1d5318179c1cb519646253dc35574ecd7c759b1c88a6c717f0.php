<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_8b57eb9633eb8aecfa6ed26dd992a3df699426b1f8eca1c817f34a0b0cf10c4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_4360dee001d7764de2deac7dd64e7aefca82727713dcde2bf00cb5278279b41b = $this->env->getExtension("native_profiler");
        $__internal_4360dee001d7764de2deac7dd64e7aefca82727713dcde2bf00cb5278279b41b->enter($__internal_4360dee001d7764de2deac7dd64e7aefca82727713dcde2bf00cb5278279b41b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4360dee001d7764de2deac7dd64e7aefca82727713dcde2bf00cb5278279b41b->leave($__internal_4360dee001d7764de2deac7dd64e7aefca82727713dcde2bf00cb5278279b41b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ebb3010a38b204b202cdc320aa5cf78725b0fa6e1f38d0f4fa822343169bfbf6 = $this->env->getExtension("native_profiler");
        $__internal_ebb3010a38b204b202cdc320aa5cf78725b0fa6e1f38d0f4fa822343169bfbf6->enter($__internal_ebb3010a38b204b202cdc320aa5cf78725b0fa6e1f38d0f4fa822343169bfbf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "login";
        
        $__internal_ebb3010a38b204b202cdc320aa5cf78725b0fa6e1f38d0f4fa822343169bfbf6->leave($__internal_ebb3010a38b204b202cdc320aa5cf78725b0fa6e1f38d0f4fa822343169bfbf6_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7ce1cf1b2a6a3b00518379ce2046430b0191dc3d77404d4a21c3c703c1f1d778 = $this->env->getExtension("native_profiler");
        $__internal_7ce1cf1b2a6a3b00518379ce2046430b0191dc3d77404d4a21c3c703c1f1d778->enter($__internal_7ce1cf1b2a6a3b00518379ce2046430b0191dc3d77404d4a21c3c703c1f1d778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 9
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 11
        echo "
    <div class=\"row \"><br><br><br><br>
        <div class=\"col s12 m4 offset-m4\">
            <div class=\"card-panel\">
                <h5 class=\"header2 upper center\">Login</h5>
                <div class=\"row\">
                    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 18
            echo "                        <div id=\"card-alert\" class=\"card green\">
                            <div class=\"card-content white-text\">
                                <p><i class=\"mdi-navigation-check\"></i> ";
            // line 20
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo ".</p>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                    <form class=\"s12\" action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                        <div class=\"row\"><!--password-->
                            <div class=\"input-field col s12\">
                                <i class=\"mdi-action-account-circle prefix\"></i>
                                <input id=\"text\" type=\"text\" name=\"_username\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"validate\">
                                <label for=\"username\" class=\"\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                                <span class=\"help-block red-text\">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>
                        <div class=\"row\"><!--password-->
                            <div class=\"input-field col s12\">
                                <i class=\"mdi-action-lock-outline prefix\"></i>
                                <input id=\"password\" type=\"password\" name=\"_password\" class=\"validate\">
                                <label for=\"password\" class=\"\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                                <span class=\"help-block red-text\">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"input-field col s12\">
                                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                                <label for=\"remember_me\">";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                            </div>
                        </div>
                        <div class=\"row\"><!--button-->
                            <div class=\"input-field col s12\">
                                <button class=\"btn cyan waves-effect waves-light right\" type=\"submit\" name=\"action\">";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "
                                    <i class=\"mdi-content-send right\"></i>
                                </button>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"input-field col s12 center\">
                                <a class=\"\" href=\"#\">Forgot Your Password ?</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_7ce1cf1b2a6a3b00518379ce2046430b0191dc3d77404d4a21c3c703c1f1d778->leave($__internal_7ce1cf1b2a6a3b00518379ce2046430b0191dc3d77404d4a21c3c703c1f1d778_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 54,  128 => 49,  116 => 40,  103 => 30,  99 => 29,  92 => 25,  87 => 24,  77 => 20,  73 => 18,  69 => 17,  61 => 11,  55 => 9,  53 => 8,  47 => 7,  35 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block title %}login{% endblock %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/*     <div class="row "><br><br><br><br>*/
/*         <div class="col s12 m4 offset-m4">*/
/*             <div class="card-panel">*/
/*                 <h5 class="header2 upper center">Login</h5>*/
/*                 <div class="row">*/
/*                     {% for message in app.session.flashbag.get('info') %}*/
/*                         <div id="card-alert" class="card green">*/
/*                             <div class="card-content white-text">*/
/*                                 <p><i class="mdi-navigation-check"></i> {{ message }}.</p>*/
/*                             </div>*/
/*                         </div>*/
/*                     {% endfor %}*/
/*                     <form class="s12" action="{{ path("fos_user_security_check") }}" method="post">*/
/*                         <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*                         <div class="row"><!--password-->*/
/*                             <div class="input-field col s12">*/
/*                                 <i class="mdi-action-account-circle prefix"></i>*/
/*                                 <input id="text" type="text" name="_username" value="{{ last_username }}" class="validate">*/
/*                                 <label for="username" class="">{{ 'security.login.username'|trans }}</label>*/
/*                                 <span class="help-block red-text">*/
/*                                     <strong></strong>*/
/*                                 </span>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="row"><!--password-->*/
/*                             <div class="input-field col s12">*/
/*                                 <i class="mdi-action-lock-outline prefix"></i>*/
/*                                 <input id="password" type="password" name="_password" class="validate">*/
/*                                 <label for="password" class="">{{ 'security.login.password'|trans }}</label>*/
/*                                 <span class="help-block red-text">*/
/*                                     <strong></strong>*/
/*                                 </span>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="row">*/
/*                             <div class="input-field col s12">*/
/*                                 <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*                                 <label for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="row"><!--button-->*/
/*                             <div class="input-field col s12">*/
/*                                 <button class="btn cyan waves-effect waves-light right" type="submit" name="action">{{ 'security.login.submit'|trans }}*/
/*                                     <i class="mdi-content-send right"></i>*/
/*                                 </button>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="row">*/
/*                             <div class="input-field col s12 center">*/
/*                                 <a class="" href="#">Forgot Your Password ?</a>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock fos_user_content %}*/
/* */
