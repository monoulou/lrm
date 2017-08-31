<?php

/* MALrmBundle:Gestion:edit.html.twig */
class __TwigTemplate_a24371a6efc9a5476a24d85058e74722303938e6c560a0bbb9953e460bc609a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MALrmBundle:Gestion:edit.html.twig", 1);
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
        $__internal_bee924cb0e194a312f13c9debe8c5d78c23bd39dc6c43fe7eb33c3da946707c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bee924cb0e194a312f13c9debe8c5d78c23bd39dc6c43fe7eb33c3da946707c0->enter($__internal_bee924cb0e194a312f13c9debe8c5d78c23bd39dc6c43fe7eb33c3da946707c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Gestion:edit.html.twig"));

        $__internal_60463631865e29d5d0ea92c606c28c1f538a698b4e09c745036bc1cebdccd31d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60463631865e29d5d0ea92c606c28c1f538a698b4e09c745036bc1cebdccd31d->enter($__internal_60463631865e29d5d0ea92c606c28c1f538a698b4e09c745036bc1cebdccd31d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Gestion:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bee924cb0e194a312f13c9debe8c5d78c23bd39dc6c43fe7eb33c3da946707c0->leave($__internal_bee924cb0e194a312f13c9debe8c5d78c23bd39dc6c43fe7eb33c3da946707c0_prof);

        
        $__internal_60463631865e29d5d0ea92c606c28c1f538a698b4e09c745036bc1cebdccd31d->leave($__internal_60463631865e29d5d0ea92c606c28c1f538a698b4e09c745036bc1cebdccd31d_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_920be61986c40c1ef4fc539b34f96d36cb3db6c33aba30ed296e93c0622ee3a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_920be61986c40c1ef4fc539b34f96d36cb3db6c33aba30ed296e93c0622ee3a8->enter($__internal_920be61986c40c1ef4fc539b34f96d36cb3db6c33aba30ed296e93c0622ee3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1e4bfc79f40b77feaa7f2129279ccc31611da6152f2fe5f297d0306dff709d5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e4bfc79f40b77feaa7f2129279ccc31611da6152f2fe5f297d0306dff709d5b->enter($__internal_1e4bfc79f40b77feaa7f2129279ccc31611da6152f2fe5f297d0306dff709d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_1e4bfc79f40b77feaa7f2129279ccc31611da6152f2fe5f297d0306dff709d5b->leave($__internal_1e4bfc79f40b77feaa7f2129279ccc31611da6152f2fe5f297d0306dff709d5b_prof);

        
        $__internal_920be61986c40c1ef4fc539b34f96d36cb3db6c33aba30ed296e93c0622ee3a8->leave($__internal_920be61986c40c1ef4fc539b34f96d36cb3db6c33aba30ed296e93c0622ee3a8_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f9594f2bbc9b06c7d1c6851d4c36b496dee7e1d493ecd5d23ed6c10233da8dce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9594f2bbc9b06c7d1c6851d4c36b496dee7e1d493ecd5d23ed6c10233da8dce->enter($__internal_f9594f2bbc9b06c7d1c6851d4c36b496dee7e1d493ecd5d23ed6c10233da8dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ace4c150d571f1db62fa1d017bced6179f8cf3835db1b330a7ea5a5698509f1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ace4c150d571f1db62fa1d017bced6179f8cf3835db1b330a7ea5a5698509f1a->enter($__internal_ace4c150d571f1db62fa1d017bced6179f8cf3835db1b330a7ea5a5698509f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ville.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_ace4c150d571f1db62fa1d017bced6179f8cf3835db1b330a7ea5a5698509f1a->leave($__internal_ace4c150d571f1db62fa1d017bced6179f8cf3835db1b330a7ea5a5698509f1a_prof);

        
        $__internal_f9594f2bbc9b06c7d1c6851d4c36b496dee7e1d493ecd5d23ed6c10233da8dce->leave($__internal_f9594f2bbc9b06c7d1c6851d4c36b496dee7e1d493ecd5d23ed6c10233da8dce_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e95bde50cdfccf0e1a88783d637f4484ff9a6cbe5e3d4455778df687a87e046d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e95bde50cdfccf0e1a88783d637f4484ff9a6cbe5e3d4455778df687a87e046d->enter($__internal_e95bde50cdfccf0e1a88783d637f4484ff9a6cbe5e3d4455778df687a87e046d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1817d311082f72dda86ff517e1f6e3a726f679bf93a1b1c57e1400019daa3554 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1817d311082f72dda86ff517e1f6e3a726f679bf93a1b1c57e1400019daa3554->enter($__internal_1817d311082f72dda86ff517e1f6e3a726f679bf93a1b1c57e1400019daa3554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("navbar.html.twig", "MALrmBundle:Gestion:edit.html.twig", 25)->display($context);
        // line 26
        echo "        <!-- END TOP NAVBAR -->
        <!-- START SIDEBAR-->
        ";
        // line 28
        $this->loadTemplate("sidebar.html.twig", "MALrmBundle:Gestion:edit.html.twig", 28)->display($context);
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
        
        $__internal_1817d311082f72dda86ff517e1f6e3a726f679bf93a1b1c57e1400019daa3554->leave($__internal_1817d311082f72dda86ff517e1f6e3a726f679bf93a1b1c57e1400019daa3554_prof);

        
        $__internal_e95bde50cdfccf0e1a88783d637f4484ff9a6cbe5e3d4455778df687a87e046d->leave($__internal_e95bde50cdfccf0e1a88783d637f4484ff9a6cbe5e3d4455778df687a87e046d_prof);

    }

    public function getTemplateName()
    {
        return "MALrmBundle:Gestion:edit.html.twig";
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


{% endblock %}", "MALrmBundle:Gestion:edit.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle/Resources/views/Gestion/edit.html.twig");
    }
}
