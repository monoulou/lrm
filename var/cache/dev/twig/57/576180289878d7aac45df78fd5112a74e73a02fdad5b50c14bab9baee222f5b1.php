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
        $__internal_24702346c13c96f980bb8bb9460f3ce7443aa57878be477c1887999bd75b60c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24702346c13c96f980bb8bb9460f3ce7443aa57878be477c1887999bd75b60c7->enter($__internal_24702346c13c96f980bb8bb9460f3ce7443aa57878be477c1887999bd75b60c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Gestion:edit.html.twig"));

        $__internal_2253b20c90bdb2b418809692a145ddbffb8de80d3faa7eb21b7372b7c263312e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2253b20c90bdb2b418809692a145ddbffb8de80d3faa7eb21b7372b7c263312e->enter($__internal_2253b20c90bdb2b418809692a145ddbffb8de80d3faa7eb21b7372b7c263312e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Gestion:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24702346c13c96f980bb8bb9460f3ce7443aa57878be477c1887999bd75b60c7->leave($__internal_24702346c13c96f980bb8bb9460f3ce7443aa57878be477c1887999bd75b60c7_prof);

        
        $__internal_2253b20c90bdb2b418809692a145ddbffb8de80d3faa7eb21b7372b7c263312e->leave($__internal_2253b20c90bdb2b418809692a145ddbffb8de80d3faa7eb21b7372b7c263312e_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_180442c9aad38bf5ed4362b930691640415138798c6653637de8b29e5e96163d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_180442c9aad38bf5ed4362b930691640415138798c6653637de8b29e5e96163d->enter($__internal_180442c9aad38bf5ed4362b930691640415138798c6653637de8b29e5e96163d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1ff9ddfb3b02ebd4d87759744fa440f29b6812dc056949ebd94052924c35ccb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ff9ddfb3b02ebd4d87759744fa440f29b6812dc056949ebd94052924c35ccb2->enter($__internal_1ff9ddfb3b02ebd4d87759744fa440f29b6812dc056949ebd94052924c35ccb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_1ff9ddfb3b02ebd4d87759744fa440f29b6812dc056949ebd94052924c35ccb2->leave($__internal_1ff9ddfb3b02ebd4d87759744fa440f29b6812dc056949ebd94052924c35ccb2_prof);

        
        $__internal_180442c9aad38bf5ed4362b930691640415138798c6653637de8b29e5e96163d->leave($__internal_180442c9aad38bf5ed4362b930691640415138798c6653637de8b29e5e96163d_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2705f35fa34804ebfd2b1721e2438ee5b679d986c79a76351ca07ff493e4b2f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2705f35fa34804ebfd2b1721e2438ee5b679d986c79a76351ca07ff493e4b2f4->enter($__internal_2705f35fa34804ebfd2b1721e2438ee5b679d986c79a76351ca07ff493e4b2f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ab8aa039d1067bcda3ffd0f9b34e8e71d23746fbf6de753e5b78646fc56c0d83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab8aa039d1067bcda3ffd0f9b34e8e71d23746fbf6de753e5b78646fc56c0d83->enter($__internal_ab8aa039d1067bcda3ffd0f9b34e8e71d23746fbf6de753e5b78646fc56c0d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ville.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_ab8aa039d1067bcda3ffd0f9b34e8e71d23746fbf6de753e5b78646fc56c0d83->leave($__internal_ab8aa039d1067bcda3ffd0f9b34e8e71d23746fbf6de753e5b78646fc56c0d83_prof);

        
        $__internal_2705f35fa34804ebfd2b1721e2438ee5b679d986c79a76351ca07ff493e4b2f4->leave($__internal_2705f35fa34804ebfd2b1721e2438ee5b679d986c79a76351ca07ff493e4b2f4_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d91c2dbd453e40fc47a5745c96a8b5925ce8adb4335bfe17ff619c4c3d7d0ee4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d91c2dbd453e40fc47a5745c96a8b5925ce8adb4335bfe17ff619c4c3d7d0ee4->enter($__internal_d91c2dbd453e40fc47a5745c96a8b5925ce8adb4335bfe17ff619c4c3d7d0ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c38f96ebce7fc15e0a8ac060062f667ef11a73acfb00ec9498b89c0f7c5d13bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c38f96ebce7fc15e0a8ac060062f667ef11a73acfb00ec9498b89c0f7c5d13bd->enter($__internal_c38f96ebce7fc15e0a8ac060062f667ef11a73acfb00ec9498b89c0f7c5d13bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo "    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    ";
        // line 28
        $this->loadTemplate("sidebar.html.twig", "MALrmBundle:Gestion:edit.html.twig", 28)->display($context);
        // line 29
        echo "    <!-- END SIDEBAR-->

    <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
    <div class=\"row\">
        <h3>MISE A JOUR OFFRE POURVUE</h3><hr style=\"border: 1px solid darkgray;\">
    </div>
    <div class=\"row\" id=\"head_row\">
        <h5>INTERFACE DE MISE A JOUR D'UNE OFFRE POURVUE:</h5>
    </div>

    <!-- BEGIN FORM -->
    <div class=\"row\" id=\"form_edit_row\">
        <h1>";
        // line 41
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["gestion"]) ? $context["gestion"] : $this->getContext($context, "gestion")), "candidat", array()), "nom", array())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["gestion"]) ? $context["gestion"] : $this->getContext($context, "gestion")), "candidat", array()), "prenom", array()), "html", null, true);
        echo "</h1>
        <h3>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["gestion"]) ? $context["gestion"] : $this->getContext($context, "gestion")), "emploi", array()), "intitule", array()), "html", null, true);
        echo "</h3>
    </div>

    <!-- BEGIN FORM -->
        ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("class" => "horizontal-form"));
        echo "
        <div class=\"row\">
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Chargé RH:</label>
                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "chargeRecrutement", array()), 'errors');
        echo "
                    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "chargeRecrutement", array()), 'widget');
        echo "
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Emploi:</label>
                    ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "emploi", array()), 'errors');
        echo "
                    ";
        // line 59
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
        // line 67
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "candidat", array()), 'errors');
        echo "
                    ";
        // line 68
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "candidat", array()), 'widget');
        echo "
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Date d'integration:</label>
                    ";
        // line 74
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateIntegration", array()), 'errors');
        echo "
                    ";
        // line 75
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateIntegration", array()), 'widget');
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-offset-5\">
                <button type=\"submit\" class=\"btn  btn-default\"><i class=\"fa fa-check\"></i>Enregister</button>
            </div>
        </div>
        ";
        // line 84
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_c38f96ebce7fc15e0a8ac060062f667ef11a73acfb00ec9498b89c0f7c5d13bd->leave($__internal_c38f96ebce7fc15e0a8ac060062f667ef11a73acfb00ec9498b89c0f7c5d13bd_prof);

        
        $__internal_d91c2dbd453e40fc47a5745c96a8b5925ce8adb4335bfe17ff619c4c3d7d0ee4->leave($__internal_d91c2dbd453e40fc47a5745c96a8b5925ce8adb4335bfe17ff619c4c3d7d0ee4_prof);

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
        return array (  224 => 84,  212 => 75,  208 => 74,  199 => 68,  195 => 67,  184 => 59,  180 => 58,  171 => 52,  167 => 51,  159 => 46,  152 => 42,  146 => 41,  132 => 29,  130 => 28,  126 => 26,  124 => 25,  117 => 20,  111 => 18,  103 => 16,  101 => 15,  95 => 11,  86 => 10,  73 => 7,  64 => 6,  51 => 4,  42 => 3,  11 => 1,);
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
        <h3>MISE A JOUR OFFRE POURVUE</h3><hr style=\"border: 1px solid darkgray;\">
    </div>
    <div class=\"row\" id=\"head_row\">
        <h5>INTERFACE DE MISE A JOUR D'UNE OFFRE POURVUE:</h5>
    </div>

    <!-- BEGIN FORM -->
    <div class=\"row\" id=\"form_edit_row\">
        <h1>{{ gestion.candidat.nom|upper }} {{ gestion.candidat.prenom }}</h1>
        <h3>{{ gestion.emploi.intitule }}</h3>
    </div>

    <!-- BEGIN FORM -->
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
            <div class=\"col-lg-offset-5\">
                <button type=\"submit\" class=\"btn  btn-default\"><i class=\"fa fa-check\"></i>Enregister</button>
            </div>
        </div>
        {{ form_end(edit_form) }}
    </div>
{% endblock %}", "MALrmBundle:Gestion:edit.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle/Resources/views/Gestion/edit.html.twig");
    }
}
