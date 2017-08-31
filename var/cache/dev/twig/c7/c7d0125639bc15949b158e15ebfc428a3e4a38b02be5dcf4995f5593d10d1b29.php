<?php

/* @MALrm/Gestion/edit.html.twig */
class __TwigTemplate_d799b8dc773007b28ee3b57c5d417f641e5214dab549c2490d4e31239390154f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@MALrm/Gestion/edit.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74f48f5f58e8760a7eea1b8a0f9f49f70b405e3542795a8efb2c7dec385eedf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74f48f5f58e8760a7eea1b8a0f9f49f70b405e3542795a8efb2c7dec385eedf0->enter($__internal_74f48f5f58e8760a7eea1b8a0f9f49f70b405e3542795a8efb2c7dec385eedf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MALrm/Gestion/edit.html.twig"));

        $__internal_3efba38cc419c0b6731de4516373d91558efba6bf49e842cc3d2900cbe780b7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3efba38cc419c0b6731de4516373d91558efba6bf49e842cc3d2900cbe780b7b->enter($__internal_3efba38cc419c0b6731de4516373d91558efba6bf49e842cc3d2900cbe780b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MALrm/Gestion/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74f48f5f58e8760a7eea1b8a0f9f49f70b405e3542795a8efb2c7dec385eedf0->leave($__internal_74f48f5f58e8760a7eea1b8a0f9f49f70b405e3542795a8efb2c7dec385eedf0_prof);

        
        $__internal_3efba38cc419c0b6731de4516373d91558efba6bf49e842cc3d2900cbe780b7b->leave($__internal_3efba38cc419c0b6731de4516373d91558efba6bf49e842cc3d2900cbe780b7b_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_73edebfd5ddf6a6288833bd913dfd7669972238ed671db199705d4da572889df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73edebfd5ddf6a6288833bd913dfd7669972238ed671db199705d4da572889df->enter($__internal_73edebfd5ddf6a6288833bd913dfd7669972238ed671db199705d4da572889df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_916649483a364f0c98dcbcf9bc2e6e1cc36934d542c08bb238c9d511478e5a48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_916649483a364f0c98dcbcf9bc2e6e1cc36934d542c08bb238c9d511478e5a48->enter($__internal_916649483a364f0c98dcbcf9bc2e6e1cc36934d542c08bb238c9d511478e5a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_916649483a364f0c98dcbcf9bc2e6e1cc36934d542c08bb238c9d511478e5a48->leave($__internal_916649483a364f0c98dcbcf9bc2e6e1cc36934d542c08bb238c9d511478e5a48_prof);

        
        $__internal_73edebfd5ddf6a6288833bd913dfd7669972238ed671db199705d4da572889df->leave($__internal_73edebfd5ddf6a6288833bd913dfd7669972238ed671db199705d4da572889df_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_35fc835d2426594a4520c6586f70c9e485207ed923c56794cab0a1bff4574d7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35fc835d2426594a4520c6586f70c9e485207ed923c56794cab0a1bff4574d7e->enter($__internal_35fc835d2426594a4520c6586f70c9e485207ed923c56794cab0a1bff4574d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_92737793b434f2e75451555baa73245b00d86c237bb249ec408d7b188ddba057 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92737793b434f2e75451555baa73245b00d86c237bb249ec408d7b188ddba057->enter($__internal_92737793b434f2e75451555baa73245b00d86c237bb249ec408d7b188ddba057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ville.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_92737793b434f2e75451555baa73245b00d86c237bb249ec408d7b188ddba057->leave($__internal_92737793b434f2e75451555baa73245b00d86c237bb249ec408d7b188ddba057_prof);

        
        $__internal_35fc835d2426594a4520c6586f70c9e485207ed923c56794cab0a1bff4574d7e->leave($__internal_35fc835d2426594a4520c6586f70c9e485207ed923c56794cab0a1bff4574d7e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_cdd3ba6c60c49d0b49a4d62a9880bbed38fd8ca9809d10ededd1c81ca5a2eba5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdd3ba6c60c49d0b49a4d62a9880bbed38fd8ca9809d10ededd1c81ca5a2eba5->enter($__internal_cdd3ba6c60c49d0b49a4d62a9880bbed38fd8ca9809d10ededd1c81ca5a2eba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0bd01e240b3d766ce45124db13f10d5d36790f9c9e489863bed599851c5dae4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bd01e240b3d766ce45124db13f10d5d36790f9c9e489863bed599851c5dae4b->enter($__internal_0bd01e240b3d766ce45124db13f10d5d36790f9c9e489863bed599851c5dae4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
    <div class=\"container-fluid\" id=\"header_container\">
        <div class=\"row\">
            <div class=\"col-lg-offset-10\">
                ";
        // line 15
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 16
            echo "                    <i class=\"material-icons\">person</i> Bonjour, ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "--<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
                ";
        } else {
            // line 18
            echo "                    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
                ";
        }
        // line 20
        echo "            </div>
        </div>
    </div>
    <div class=\"container-fluid\" id=\"main_container\">
        <!-- START TOP NAVBAR-->
        ";
        // line 25
        $this->loadTemplate("navbar.html.twig", "@MALrm/Gestion/edit.html.twig", 25)->display($context);
        // line 26
        echo "        <!-- END TOP NAVBAR -->
        <!-- START SIDEBAR-->
        ";
        // line 28
        $this->loadTemplate("sidebar.html.twig", "@MALrm/Gestion/edit.html.twig", 28)->display($context);
        // line 29
        echo "        <!-- END SIDEBAR-->

        <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
            <div class=\"row\">
                <h3>MODIFIER UNE OFFRE POURVUE</h3><hr style=\"border: 1px solid darkgray;\">
            </div>
            <div class=\"row\" id=\"head_row\">
                <h5>INTERFACE DE MISE A JOUR D'UNE OFFRE POURVUE:</h5>
            </div>
            <div class=\"row\" id=\"form_edit_row\">
                <h1>";
        // line 39
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["gestion"]) ? $context["gestion"] : $this->getContext($context, "gestion")), "candidat", array()), "nom", array())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["gestion"]) ? $context["gestion"] : $this->getContext($context, "gestion")), "candidat", array()), "prenom", array()), "html", null, true);
        echo "</h1>
                <h3>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["gestion"]) ? $context["gestion"] : $this->getContext($context, "gestion")), "emploi", array()), "intitule", array()), "html", null, true);
        echo "</h3>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-offset-11\">
                    <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_gestion_index");
        echo "\"><i class=\"material-icons\" id=\"previous\" style=\"margin-left: 25px\">skip_previous</i></a>
                </div>
            </div>

        <!-- BEGIN FORM -->
            <div class=\"row\">
                ";
        // line 50
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("class" => "horizontal-form"));
        echo "
                <div class=\"row\">
                    <div class=\"col-lg-3\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Chargé RH:</label>
                            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "chargeRecrutement", array()), 'errors');
        echo "
                            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "chargeRecrutement", array()), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"col-lg-3\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Emploi:</label>
                            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "emploi", array()), 'errors');
        echo "
                            ";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "emploi", array()), 'widget');
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-3\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Candidat:</label>
                            ";
        // line 71
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "candidat", array()), 'errors');
        echo "
                            ";
        // line 72
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "candidat", array()), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"col-lg-3\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Date d'integration:</label>
                            ";
        // line 78
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateIntegration", array()), 'errors');
        echo "
                            ";
        // line 79
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateIntegration", array()), 'widget');
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-offset-11\">
                        <button type=\"submit\" class=\"btn  btn-default\"><i class=\"fa fa-check\"></i><i class=\"material-icons\">save</i></button>
                    </div>
                </div>
                ";
        // line 88
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
            <!-- END FORM -->
    </div>


";
        
        $__internal_0bd01e240b3d766ce45124db13f10d5d36790f9c9e489863bed599851c5dae4b->leave($__internal_0bd01e240b3d766ce45124db13f10d5d36790f9c9e489863bed599851c5dae4b_prof);

        
        $__internal_cdd3ba6c60c49d0b49a4d62a9880bbed38fd8ca9809d10ededd1c81ca5a2eba5->leave($__internal_cdd3ba6c60c49d0b49a4d62a9880bbed38fd8ca9809d10ededd1c81ca5a2eba5_prof);

    }

    public function getTemplateName()
    {
        return "@MALrm/Gestion/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 88,  219 => 79,  215 => 78,  206 => 72,  202 => 71,  191 => 63,  187 => 62,  178 => 56,  174 => 55,  166 => 50,  157 => 44,  150 => 40,  144 => 39,  132 => 29,  130 => 28,  126 => 26,  124 => 25,  117 => 20,  111 => 18,  103 => 16,  101 => 15,  95 => 11,  86 => 10,  73 => 7,  64 => 6,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

 {% block stylesheets %}
     <link href=\"{{ asset ('css/client.css') }}\" rel='stylesheet' type='text/css' />
 {% endblock %}
{% block javascripts %}
    <script src=\"{{ asset('js/ville.js') }}\" type=\"text/javascript\"></script>
{% endblock %}

{% block body %}

    <div class=\"container-fluid\" id=\"header_container\">
        <div class=\"row\">
            <div class=\"col-lg-offset-10\">
                {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                    <i class=\"material-icons\">person</i> Bonjour, {{ app.user.username }}--<a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a>
                {% else %}
                    <a href=\"{{ path('fos_user_security_login') }}\">Connexion</a>
                {% endif %}
            </div>
        </div>
    </div>
    <div class=\"container-fluid\" id=\"main_container\">
        <!-- START TOP NAVBAR-->
        {% include 'navbar.html.twig' %}
        <!-- END TOP NAVBAR -->
        <!-- START SIDEBAR-->
        {% include 'sidebar.html.twig' %}
        <!-- END SIDEBAR-->

        <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
            <div class=\"row\">
                <h3>MODIFIER UNE OFFRE POURVUE</h3><hr style=\"border: 1px solid darkgray;\">
            </div>
            <div class=\"row\" id=\"head_row\">
                <h5>INTERFACE DE MISE A JOUR D'UNE OFFRE POURVUE:</h5>
            </div>
            <div class=\"row\" id=\"form_edit_row\">
                <h1>{{ gestion.candidat.nom|upper }} {{ gestion.candidat.prenom }}</h1>
                <h3>{{ gestion.emploi.intitule }}</h3>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-offset-11\">
                    <a href=\"{{ path('ma_lrm_gestion_index') }}\"><i class=\"material-icons\" id=\"previous\" style=\"margin-left: 25px\">skip_previous</i></a>
                </div>
            </div>

        <!-- BEGIN FORM -->
            <div class=\"row\">
                {{ form_start(edit_form, {'class': 'horizontal-form'}) }}
                <div class=\"row\">
                    <div class=\"col-lg-3\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Chargé RH:</label>
                            {{ form_errors(edit_form.chargeRecrutement) }}
                            {{ form_widget(edit_form.chargeRecrutement) }}
                        </div>
                    </div>
                    <div class=\"col-lg-3\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Emploi:</label>
                            {{ form_errors(edit_form.emploi)}}
                            {{ form_widget(edit_form.emploi)}}
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-3\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Candidat:</label>
                            {{ form_errors(edit_form.candidat)}}
                            {{ form_widget(edit_form.candidat)}}
                        </div>
                    </div>
                    <div class=\"col-lg-3\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Date d'integration:</label>
                            {{ form_errors(edit_form.dateIntegration) }}
                            {{ form_widget(edit_form.dateIntegration) }}
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-offset-11\">
                        <button type=\"submit\" class=\"btn  btn-default\"><i class=\"fa fa-check\"></i><i class=\"material-icons\">save</i></button>
                    </div>
                </div>
                {{ form_end(edit_form) }}
            </div>
            <!-- END FORM -->
    </div>


{% endblock %}", "@MALrm/Gestion/edit.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle\\Resources\\views\\Gestion\\edit.html.twig");
    }
}
