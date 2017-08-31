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
        $__internal_3aee46b48cb1e97597830f2f57e1337f30b50b6faf6ad3e756662a1857dd47d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3aee46b48cb1e97597830f2f57e1337f30b50b6faf6ad3e756662a1857dd47d0->enter($__internal_3aee46b48cb1e97597830f2f57e1337f30b50b6faf6ad3e756662a1857dd47d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MALrm/Gestion/edit.html.twig"));

        $__internal_67a5710034c567cf2ea513b7abd7909ff00adce874ec6bbcbce3404ab8ba0b44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67a5710034c567cf2ea513b7abd7909ff00adce874ec6bbcbce3404ab8ba0b44->enter($__internal_67a5710034c567cf2ea513b7abd7909ff00adce874ec6bbcbce3404ab8ba0b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MALrm/Gestion/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3aee46b48cb1e97597830f2f57e1337f30b50b6faf6ad3e756662a1857dd47d0->leave($__internal_3aee46b48cb1e97597830f2f57e1337f30b50b6faf6ad3e756662a1857dd47d0_prof);

        
        $__internal_67a5710034c567cf2ea513b7abd7909ff00adce874ec6bbcbce3404ab8ba0b44->leave($__internal_67a5710034c567cf2ea513b7abd7909ff00adce874ec6bbcbce3404ab8ba0b44_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2a7a505718091130bfc0fde21be689feaf729f913722a7184c420c4c6732f7a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a7a505718091130bfc0fde21be689feaf729f913722a7184c420c4c6732f7a8->enter($__internal_2a7a505718091130bfc0fde21be689feaf729f913722a7184c420c4c6732f7a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e4c0c64e3e21b9305402306db839707fe05b6a209d3707b28cd2b652746a075e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4c0c64e3e21b9305402306db839707fe05b6a209d3707b28cd2b652746a075e->enter($__internal_e4c0c64e3e21b9305402306db839707fe05b6a209d3707b28cd2b652746a075e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_e4c0c64e3e21b9305402306db839707fe05b6a209d3707b28cd2b652746a075e->leave($__internal_e4c0c64e3e21b9305402306db839707fe05b6a209d3707b28cd2b652746a075e_prof);

        
        $__internal_2a7a505718091130bfc0fde21be689feaf729f913722a7184c420c4c6732f7a8->leave($__internal_2a7a505718091130bfc0fde21be689feaf729f913722a7184c420c4c6732f7a8_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_82046fdb6293cf308a752485b6f251540ec003c14a938e49b3422b7c9011e76d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82046fdb6293cf308a752485b6f251540ec003c14a938e49b3422b7c9011e76d->enter($__internal_82046fdb6293cf308a752485b6f251540ec003c14a938e49b3422b7c9011e76d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d2f429f056627e1c5259a66be76d89ae5f396ca9172806d71897d01c23b0c898 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2f429f056627e1c5259a66be76d89ae5f396ca9172806d71897d01c23b0c898->enter($__internal_d2f429f056627e1c5259a66be76d89ae5f396ca9172806d71897d01c23b0c898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ville.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_d2f429f056627e1c5259a66be76d89ae5f396ca9172806d71897d01c23b0c898->leave($__internal_d2f429f056627e1c5259a66be76d89ae5f396ca9172806d71897d01c23b0c898_prof);

        
        $__internal_82046fdb6293cf308a752485b6f251540ec003c14a938e49b3422b7c9011e76d->leave($__internal_82046fdb6293cf308a752485b6f251540ec003c14a938e49b3422b7c9011e76d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_07fe9d3188f342cba3e9835b975898354213d75437a30916a1c6269910f92e84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07fe9d3188f342cba3e9835b975898354213d75437a30916a1c6269910f92e84->enter($__internal_07fe9d3188f342cba3e9835b975898354213d75437a30916a1c6269910f92e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0f3d6d347c0700d3804360aef519e29b267bd56b0d579d4a80e7ad80705fd371 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f3d6d347c0700d3804360aef519e29b267bd56b0d579d4a80e7ad80705fd371->enter($__internal_0f3d6d347c0700d3804360aef519e29b267bd56b0d579d4a80e7ad80705fd371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0f3d6d347c0700d3804360aef519e29b267bd56b0d579d4a80e7ad80705fd371->leave($__internal_0f3d6d347c0700d3804360aef519e29b267bd56b0d579d4a80e7ad80705fd371_prof);

        
        $__internal_07fe9d3188f342cba3e9835b975898354213d75437a30916a1c6269910f92e84->leave($__internal_07fe9d3188f342cba3e9835b975898354213d75437a30916a1c6269910f92e84_prof);

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
