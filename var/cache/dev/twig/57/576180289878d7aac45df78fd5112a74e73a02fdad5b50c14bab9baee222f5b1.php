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
        $__internal_4e2dc9be0b57455bb3dc7851c4494f25e3ca1e82b26fe87bd899c96e9c47bfd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e2dc9be0b57455bb3dc7851c4494f25e3ca1e82b26fe87bd899c96e9c47bfd7->enter($__internal_4e2dc9be0b57455bb3dc7851c4494f25e3ca1e82b26fe87bd899c96e9c47bfd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Gestion:edit.html.twig"));

        $__internal_660d97fa422d089bacb2e783afe7b2af8cdc9d6f1ebf7754fc730e2a937023d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_660d97fa422d089bacb2e783afe7b2af8cdc9d6f1ebf7754fc730e2a937023d9->enter($__internal_660d97fa422d089bacb2e783afe7b2af8cdc9d6f1ebf7754fc730e2a937023d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Gestion:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e2dc9be0b57455bb3dc7851c4494f25e3ca1e82b26fe87bd899c96e9c47bfd7->leave($__internal_4e2dc9be0b57455bb3dc7851c4494f25e3ca1e82b26fe87bd899c96e9c47bfd7_prof);

        
        $__internal_660d97fa422d089bacb2e783afe7b2af8cdc9d6f1ebf7754fc730e2a937023d9->leave($__internal_660d97fa422d089bacb2e783afe7b2af8cdc9d6f1ebf7754fc730e2a937023d9_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_492cd54504c61df6af5e43878ec8664287267a1077ee8e1d8a550e6a4b75a3f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_492cd54504c61df6af5e43878ec8664287267a1077ee8e1d8a550e6a4b75a3f6->enter($__internal_492cd54504c61df6af5e43878ec8664287267a1077ee8e1d8a550e6a4b75a3f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_897da7fb09886abda822097c850ef40fc1db5d5518c6a2aa5d5b63ed3f73d80f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_897da7fb09886abda822097c850ef40fc1db5d5518c6a2aa5d5b63ed3f73d80f->enter($__internal_897da7fb09886abda822097c850ef40fc1db5d5518c6a2aa5d5b63ed3f73d80f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_897da7fb09886abda822097c850ef40fc1db5d5518c6a2aa5d5b63ed3f73d80f->leave($__internal_897da7fb09886abda822097c850ef40fc1db5d5518c6a2aa5d5b63ed3f73d80f_prof);

        
        $__internal_492cd54504c61df6af5e43878ec8664287267a1077ee8e1d8a550e6a4b75a3f6->leave($__internal_492cd54504c61df6af5e43878ec8664287267a1077ee8e1d8a550e6a4b75a3f6_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e9778c919c9fc3f5ad9a0ce95a382dc745ca703ab08a535ecd46940239d632e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9778c919c9fc3f5ad9a0ce95a382dc745ca703ab08a535ecd46940239d632e6->enter($__internal_e9778c919c9fc3f5ad9a0ce95a382dc745ca703ab08a535ecd46940239d632e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_df04d713d6f3f9304309bbb8e7bac096968065d299add2560dcf5e3b93595314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df04d713d6f3f9304309bbb8e7bac096968065d299add2560dcf5e3b93595314->enter($__internal_df04d713d6f3f9304309bbb8e7bac096968065d299add2560dcf5e3b93595314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ville.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_df04d713d6f3f9304309bbb8e7bac096968065d299add2560dcf5e3b93595314->leave($__internal_df04d713d6f3f9304309bbb8e7bac096968065d299add2560dcf5e3b93595314_prof);

        
        $__internal_e9778c919c9fc3f5ad9a0ce95a382dc745ca703ab08a535ecd46940239d632e6->leave($__internal_e9778c919c9fc3f5ad9a0ce95a382dc745ca703ab08a535ecd46940239d632e6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e0d1298c7fb91468c66adaf8a1e56272e771939817176818e504ce0f8feebe2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e0d1298c7fb91468c66adaf8a1e56272e771939817176818e504ce0f8feebe2->enter($__internal_2e0d1298c7fb91468c66adaf8a1e56272e771939817176818e504ce0f8feebe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fe3fbc6361cf1067e2044b44fd6f9bb504519b00f5058ecffc64360a5d60fe9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe3fbc6361cf1067e2044b44fd6f9bb504519b00f5058ecffc64360a5d60fe9e->enter($__internal_fe3fbc6361cf1067e2044b44fd6f9bb504519b00f5058ecffc64360a5d60fe9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
    <div class=\"container-fluid\" id=\"header_container\">
        <div class=\"row\">
            <div class=\"col-lg-2\" style=\"margin-left: -120px\">
                ";
        // line 16
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 17
            echo "                    <i class=\"material-icons\">person</i> Bonjour, ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
                ";
        } else {
            // line 19
            echo "                    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
                ";
        }
        // line 21
        echo "            </div>
            <div class=\"col-lg-offset-11\" style=\"padding-top: 10px\" id=\"logout\"><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"><i class=\"material-icons\">input</i></a></div>
        </div>
    </div>
    <div class=\"container-fluid\" id=\"main_container\">
        <!-- START TOP NAVBAR-->
        ";
        // line 27
        $this->loadTemplate("navbar.html.twig", "MALrmBundle:Gestion:edit.html.twig", 27)->display($context);
        // line 28
        echo "        <!-- END TOP NAVBAR -->
        <!-- START SIDEBAR-->
        ";
        // line 30
        $this->loadTemplate("sidebar.html.twig", "MALrmBundle:Gestion:edit.html.twig", 30)->display($context);
        // line 31
        echo "        <!-- END SIDEBAR-->

        <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
            <div class=\"row\">
                <h3>MODIFIER UNE OFFRE POURVUE</h3><hr style=\"border: 1px solid darkgray;\">
            </div>
            <div class=\"row\" id=\"head_row\">
                <h5>INTERFACE DE MISE A JOUR D'UNE OFFRE POURVUE</h5>
            </div>
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
            <div class=\"row\">
                <div class=\"col-lg-offset-11\">
                    <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_gestion_index");
        echo "\"><i class=\"material-icons\" id=\"previous\" style=\"margin-left: 25px\">skip_previous</i></a>
                </div>
            </div>

            <!-- BEGIN FORM-->
            ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("class" => "horizontal-form"));
        echo "
            <div class=\"row\">
                <div class=\"col-lg-offset-3 col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Utilisateur <span class=\"star\">*</span></label>
                        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "chargeRecrutement", array()), 'errors');
        echo "
                        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "chargeRecrutement", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Emploi <span class=\"star\">*</span></label>
                        ";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "emploi", array()), 'errors');
        echo "
                        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "emploi", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-offset-3 col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Candidat <span class=\"star\">*</span></label>
                        ";
        // line 72
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "candidat", array()), 'errors');
        echo "
                        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "candidat", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Date d'integration <span class=\"star\">*</span></label>
                        ";
        // line 79
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateIntegration", array()), 'errors');
        echo "
                        ";
        // line 80
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateIntegration", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-offset-7 col-lg-2\">
                    <button type=\"submit\" style=\"width: 100%\" class=\"btn  btn-default\"><i class=\"fa fa-check\"></i>Enregister</button>
                </div>
            </div>
            ";
        // line 89
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
            <!-- END FORM-->
    </div>


";
        
        $__internal_fe3fbc6361cf1067e2044b44fd6f9bb504519b00f5058ecffc64360a5d60fe9e->leave($__internal_fe3fbc6361cf1067e2044b44fd6f9bb504519b00f5058ecffc64360a5d60fe9e_prof);

        
        $__internal_2e0d1298c7fb91468c66adaf8a1e56272e771939817176818e504ce0f8feebe2->leave($__internal_2e0d1298c7fb91468c66adaf8a1e56272e771939817176818e504ce0f8feebe2_prof);

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
        return array (  236 => 89,  224 => 80,  220 => 79,  211 => 73,  207 => 72,  196 => 64,  192 => 63,  183 => 57,  179 => 56,  171 => 51,  163 => 46,  156 => 42,  150 => 41,  138 => 31,  136 => 30,  132 => 28,  130 => 27,  122 => 22,  119 => 21,  113 => 19,  107 => 17,  105 => 16,  99 => 12,  90 => 11,  78 => 8,  73 => 7,  64 => 6,  51 => 4,  42 => 3,  11 => 1,);
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
    <script src=\"{{ asset('js/datepicker.js') }}\" type=\"text/javascript\"></script>
{% endblock %}

{% block body %}

    <div class=\"container-fluid\" id=\"header_container\">
        <div class=\"row\">
            <div class=\"col-lg-2\" style=\"margin-left: -120px\">
                {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                    <i class=\"material-icons\">person</i> Bonjour, {{ app.user.username }}
                {% else %}
                    <a href=\"{{ path('fos_user_security_login') }}\">Connexion</a>
                {% endif %}
            </div>
            <div class=\"col-lg-offset-11\" style=\"padding-top: 10px\" id=\"logout\"><a href=\"{{ path('fos_user_security_logout') }}\"><i class=\"material-icons\">input</i></a></div>
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
                <h5>INTERFACE DE MISE A JOUR D'UNE OFFRE POURVUE</h5>
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

            <!-- BEGIN FORM-->
            {{ form_start(edit_form, {'class': 'horizontal-form'}) }}
            <div class=\"row\">
                <div class=\"col-lg-offset-3 col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Utilisateur <span class=\"star\">*</span></label>
                        {{ form_errors(edit_form.chargeRecrutement) }}
                        {{ form_widget(edit_form.chargeRecrutement) }}
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Emploi <span class=\"star\">*</span></label>
                        {{ form_errors(edit_form.emploi)}}
                        {{ form_widget(edit_form.emploi)}}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-offset-3 col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Candidat <span class=\"star\">*</span></label>
                        {{ form_errors(edit_form.candidat)}}
                        {{ form_widget(edit_form.candidat)}}
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Date d'integration <span class=\"star\">*</span></label>
                        {{ form_errors(edit_form.dateIntegration) }}
                        {{ form_widget(edit_form.dateIntegration) }}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-offset-7 col-lg-2\">
                    <button type=\"submit\" style=\"width: 100%\" class=\"btn  btn-default\"><i class=\"fa fa-check\"></i>Enregister</button>
                </div>
            </div>
            {{ form_end(edit_form) }}
            <!-- END FORM-->
    </div>


{% endblock %}", "MALrmBundle:Gestion:edit.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle/Resources/views/Gestion/edit.html.twig");
    }
}
