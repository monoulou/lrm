<?php

/* @MALrm/Emploi/edit.html.twig */
class __TwigTemplate_bd01dc8834a8caf0a60b6019f9f11bf35e5f3ce58de3362fa5f52286731e878a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@MALrm/Emploi/edit.html.twig", 1);
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
        $__internal_84f7315707220ee4d1a91d176022c1744bd68da887383ec559ba24e6232d88e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84f7315707220ee4d1a91d176022c1744bd68da887383ec559ba24e6232d88e5->enter($__internal_84f7315707220ee4d1a91d176022c1744bd68da887383ec559ba24e6232d88e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MALrm/Emploi/edit.html.twig"));

        $__internal_7003f88718ee0ae3121b2df9d885268fedcfae6715f1bdf2e8927966d314bda2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7003f88718ee0ae3121b2df9d885268fedcfae6715f1bdf2e8927966d314bda2->enter($__internal_7003f88718ee0ae3121b2df9d885268fedcfae6715f1bdf2e8927966d314bda2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MALrm/Emploi/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84f7315707220ee4d1a91d176022c1744bd68da887383ec559ba24e6232d88e5->leave($__internal_84f7315707220ee4d1a91d176022c1744bd68da887383ec559ba24e6232d88e5_prof);

        
        $__internal_7003f88718ee0ae3121b2df9d885268fedcfae6715f1bdf2e8927966d314bda2->leave($__internal_7003f88718ee0ae3121b2df9d885268fedcfae6715f1bdf2e8927966d314bda2_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_629ceb851599ab4cec6ddf18885547f1626029233e9875dc566239d72a55d63e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_629ceb851599ab4cec6ddf18885547f1626029233e9875dc566239d72a55d63e->enter($__internal_629ceb851599ab4cec6ddf18885547f1626029233e9875dc566239d72a55d63e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6242b39c5702cfa92533aec7ef1a98574310d4f8f8a0536d6728235e3ff900e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6242b39c5702cfa92533aec7ef1a98574310d4f8f8a0536d6728235e3ff900e2->enter($__internal_6242b39c5702cfa92533aec7ef1a98574310d4f8f8a0536d6728235e3ff900e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_6242b39c5702cfa92533aec7ef1a98574310d4f8f8a0536d6728235e3ff900e2->leave($__internal_6242b39c5702cfa92533aec7ef1a98574310d4f8f8a0536d6728235e3ff900e2_prof);

        
        $__internal_629ceb851599ab4cec6ddf18885547f1626029233e9875dc566239d72a55d63e->leave($__internal_629ceb851599ab4cec6ddf18885547f1626029233e9875dc566239d72a55d63e_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e4dd63e6c3a1dc6f742b03664d7384586773140208764a859bb89a0c1c5933a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4dd63e6c3a1dc6f742b03664d7384586773140208764a859bb89a0c1c5933a9->enter($__internal_e4dd63e6c3a1dc6f742b03664d7384586773140208764a859bb89a0c1c5933a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_00513680ecb7d64f3555f38ac6081d641e8749879b3c95c72ea0bbe45ff455b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00513680ecb7d64f3555f38ac6081d641e8749879b3c95c72ea0bbe45ff455b3->enter($__internal_00513680ecb7d64f3555f38ac6081d641e8749879b3c95c72ea0bbe45ff455b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ville.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_00513680ecb7d64f3555f38ac6081d641e8749879b3c95c72ea0bbe45ff455b3->leave($__internal_00513680ecb7d64f3555f38ac6081d641e8749879b3c95c72ea0bbe45ff455b3_prof);

        
        $__internal_e4dd63e6c3a1dc6f742b03664d7384586773140208764a859bb89a0c1c5933a9->leave($__internal_e4dd63e6c3a1dc6f742b03664d7384586773140208764a859bb89a0c1c5933a9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a73025c818c97f0f939dbca8c3ecfccc2c587e3eb3d30cda08a3268b41c3c77d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a73025c818c97f0f939dbca8c3ecfccc2c587e3eb3d30cda08a3268b41c3c77d->enter($__internal_a73025c818c97f0f939dbca8c3ecfccc2c587e3eb3d30cda08a3268b41c3c77d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5609caef6997b841186f03d7fffc61aefa840fee487e6fdd49dfbbe4da503713 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5609caef6997b841186f03d7fffc61aefa840fee487e6fdd49dfbbe4da503713->enter($__internal_5609caef6997b841186f03d7fffc61aefa840fee487e6fdd49dfbbe4da503713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("navbar.html.twig", "@MALrm/Emploi/edit.html.twig", 25)->display($context);
        // line 26
        echo "    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    ";
        // line 28
        $this->loadTemplate("sidebar.html.twig", "@MALrm/Emploi/edit.html.twig", 28)->display($context);
        // line 29
        echo "    <!-- END SIDEBAR-->

    <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
    <div class=\"row\">
        <h3>MISE A JOUR CLIENT</h3><hr style=\"border: 1px solid darkgray;\">
    </div>
    <div class=\"row\" id=\"head_row\">
        <h5>INTERFACE DE MISE A JOUR D'UN PROFIL CLIENT:</h5>
    </div>

    <!-- BEGIN FORM -->
    <div class=\"row\" id=\"form_edit_row\">
        <div class=\"col-lg-4\"> <h1>";
        // line 41
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["emploi"]) ? $context["emploi"] : $this->getContext($context, "emploi")), "intitule", array())), "html", null, true);
        echo "</h1></div>
        <div class=\"col-lg-offset-11\">
            <a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_emploi_index");
        echo "\"><i class=\"material-icons\" id=\"previous\" style=\"margin-left: 35px; margin-top: 68px\">skip_previous</i></a>
        </div>
    </div>

    <!-- BEGIN FORM -->
    <div class=\"row\" id=\"form_row\">
        ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("class" => "horizontal-form"));
        echo "
        <div class=\"row\">
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Entreprise:</label>
                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "client", array()), 'errors');
        echo "
                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "client", array()), 'widget');
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Intitulé du poste:</label>
                    ";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "intitule", array()), 'errors');
        echo "
                    ";
        // line 64
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "intitule", array()), 'widget');
        echo "
                </div>
            </div>
            <div class=\"col-lg-2\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Type de contrat:</label>
                    ";
        // line 70
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "contrat", array()), 'errors');
        echo "
                    ";
        // line 71
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "contrat", array()), 'widget');
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-3\">
                <label class=\"control-label\">Lieu d'activité:</label>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    ";
        // line 84
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "villeCodePostal", array()), 'errors');
        echo "
                    ";
        // line 85
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "villeCodePostal", array()), 'widget');
        echo "
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    ";
        // line 91
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "villeActivite", array()), 'errors');
        echo "
                    ";
        // line 92
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "villeActivite", array()), 'widget');
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Nombre de postes:</label>
                    ";
        // line 100
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombrePoste", array()), 'errors');
        echo "
                    ";
        // line 101
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombrePoste", array()), 'widget');
        echo "
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Site de parution:</label>
                    ";
        // line 107
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "siteParution", array()), 'errors');
        echo "
                    ";
        // line 108
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "siteParution", array()), 'widget');
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-7\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Description du poste:</label>
                    ";
        // line 116
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'errors');
        echo "
                    ";
        // line 117
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description", array()), 'widget');
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-offset-11\">
                <button type=\"submit\" class=\"btn  btn-default\"><i class=\"material-icons\">save</i></button>
            </div>
        </div>
        ";
        // line 126
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
    </div>


";
        
        $__internal_5609caef6997b841186f03d7fffc61aefa840fee487e6fdd49dfbbe4da503713->leave($__internal_5609caef6997b841186f03d7fffc61aefa840fee487e6fdd49dfbbe4da503713_prof);

        
        $__internal_a73025c818c97f0f939dbca8c3ecfccc2c587e3eb3d30cda08a3268b41c3c77d->leave($__internal_a73025c818c97f0f939dbca8c3ecfccc2c587e3eb3d30cda08a3268b41c3c77d_prof);

    }

    public function getTemplateName()
    {
        return "@MALrm/Emploi/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 126,  276 => 117,  272 => 116,  261 => 108,  257 => 107,  248 => 101,  244 => 100,  233 => 92,  228 => 91,  220 => 85,  215 => 84,  200 => 71,  196 => 70,  187 => 64,  183 => 63,  172 => 55,  168 => 54,  160 => 49,  151 => 43,  146 => 41,  132 => 29,  130 => 28,  126 => 26,  124 => 25,  117 => 20,  111 => 18,  103 => 16,  101 => 15,  95 => 11,  86 => 10,  73 => 7,  64 => 6,  51 => 4,  42 => 3,  11 => 1,);
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
        <h3>MISE A JOUR CLIENT</h3><hr style=\"border: 1px solid darkgray;\">
    </div>
    <div class=\"row\" id=\"head_row\">
        <h5>INTERFACE DE MISE A JOUR D'UN PROFIL CLIENT:</h5>
    </div>

    <!-- BEGIN FORM -->
    <div class=\"row\" id=\"form_edit_row\">
        <div class=\"col-lg-4\"> <h1>{{ emploi.intitule|upper }}</h1></div>
        <div class=\"col-lg-offset-11\">
            <a href=\"{{ path('ma_lrm_emploi_index') }}\"><i class=\"material-icons\" id=\"previous\" style=\"margin-left: 35px; margin-top: 68px\">skip_previous</i></a>
        </div>
    </div>

    <!-- BEGIN FORM -->
    <div class=\"row\" id=\"form_row\">
        {{ form_start(edit_form, {'class': 'horizontal-form'}) }}
        <div class=\"row\">
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Entreprise:</label>
                    {{ form_errors(edit_form.client)}}
                    {{ form_widget(edit_form.client) }}
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Intitulé du poste:</label>
                    {{ form_errors(edit_form.intitule) }}
                    {{ form_widget(edit_form.intitule) }}
                </div>
            </div>
            <div class=\"col-lg-2\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Type de contrat:</label>
                    {{ form_errors(edit_form.contrat)}}
                    {{ form_widget(edit_form.contrat)}}
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-3\">
                <label class=\"control-label\">Lieu d'activité:</label>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    {#<label class=\"control-label\">Code postal</label>#}
                    {{ form_errors(edit_form.villeCodePostal) }}
                    {{ form_widget(edit_form.villeCodePostal) }}
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    {#<label class=\"control-label\">Ville</label>#}
                    {{ form_errors(edit_form.villeActivite) }}
                    {{ form_widget(edit_form.villeActivite) }}
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Nombre de postes:</label>
                    {{ form_errors(edit_form.nombrePoste)}}
                    {{ form_widget(edit_form.nombrePoste)}}
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Site de parution:</label>
                    {{ form_errors(edit_form.siteParution)}}
                    {{ form_widget(edit_form.siteParution)}}
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-7\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Description du poste:</label>
                    {{ form_errors(edit_form.description)}}
                    {{ form_widget(edit_form.description) }}
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-offset-11\">
                <button type=\"submit\" class=\"btn  btn-default\"><i class=\"material-icons\">save</i></button>
            </div>
        </div>
        {{ form_end(edit_form) }}
    </div>


{% endblock %}", "@MALrm/Emploi/edit.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle\\Resources\\views\\Emploi\\edit.html.twig");
    }
}
