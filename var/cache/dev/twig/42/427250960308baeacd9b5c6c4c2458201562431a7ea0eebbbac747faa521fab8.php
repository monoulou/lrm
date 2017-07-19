<?php

/* @MALrm/Emploi/new.html.twig */
class __TwigTemplate_fee9eb8242d3d30f979e7cd4e1f72fc4af36862bccf73d1b8e7a473368155b17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@MALrm/Emploi/new.html.twig", 1);
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
        $__internal_1c6b4be2271fd26bbe204373e3a727eed60fcb5592b9f64a1d2e3f28f7bfda99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c6b4be2271fd26bbe204373e3a727eed60fcb5592b9f64a1d2e3f28f7bfda99->enter($__internal_1c6b4be2271fd26bbe204373e3a727eed60fcb5592b9f64a1d2e3f28f7bfda99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MALrm/Emploi/new.html.twig"));

        $__internal_ff499fbec01c1967d872e431b725ab7dee9c3e23ffb4edfda4684f81b564a817 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff499fbec01c1967d872e431b725ab7dee9c3e23ffb4edfda4684f81b564a817->enter($__internal_ff499fbec01c1967d872e431b725ab7dee9c3e23ffb4edfda4684f81b564a817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MALrm/Emploi/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c6b4be2271fd26bbe204373e3a727eed60fcb5592b9f64a1d2e3f28f7bfda99->leave($__internal_1c6b4be2271fd26bbe204373e3a727eed60fcb5592b9f64a1d2e3f28f7bfda99_prof);

        
        $__internal_ff499fbec01c1967d872e431b725ab7dee9c3e23ffb4edfda4684f81b564a817->leave($__internal_ff499fbec01c1967d872e431b725ab7dee9c3e23ffb4edfda4684f81b564a817_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0b8a740dafd01d1be5a53265ee92ca0813cec4c0bd0c6b19e25671a5ad62bb87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b8a740dafd01d1be5a53265ee92ca0813cec4c0bd0c6b19e25671a5ad62bb87->enter($__internal_0b8a740dafd01d1be5a53265ee92ca0813cec4c0bd0c6b19e25671a5ad62bb87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d568aa45391c1846918d9a3e4faa5a71594e6fa8b643a0f553c68ce402eb2faf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d568aa45391c1846918d9a3e4faa5a71594e6fa8b643a0f553c68ce402eb2faf->enter($__internal_d568aa45391c1846918d9a3e4faa5a71594e6fa8b643a0f553c68ce402eb2faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_d568aa45391c1846918d9a3e4faa5a71594e6fa8b643a0f553c68ce402eb2faf->leave($__internal_d568aa45391c1846918d9a3e4faa5a71594e6fa8b643a0f553c68ce402eb2faf_prof);

        
        $__internal_0b8a740dafd01d1be5a53265ee92ca0813cec4c0bd0c6b19e25671a5ad62bb87->leave($__internal_0b8a740dafd01d1be5a53265ee92ca0813cec4c0bd0c6b19e25671a5ad62bb87_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3c958eeb88bb7e62e521dc8a536ef34c7a20aff52eeeacbfef28963195ed526c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c958eeb88bb7e62e521dc8a536ef34c7a20aff52eeeacbfef28963195ed526c->enter($__internal_3c958eeb88bb7e62e521dc8a536ef34c7a20aff52eeeacbfef28963195ed526c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_332612154634364fb732e82ab1cec778698cc30f26e0fbaeab75b2e4b428cdbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_332612154634364fb732e82ab1cec778698cc30f26e0fbaeab75b2e4b428cdbd->enter($__internal_332612154634364fb732e82ab1cec778698cc30f26e0fbaeab75b2e4b428cdbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ville.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_332612154634364fb732e82ab1cec778698cc30f26e0fbaeab75b2e4b428cdbd->leave($__internal_332612154634364fb732e82ab1cec778698cc30f26e0fbaeab75b2e4b428cdbd_prof);

        
        $__internal_3c958eeb88bb7e62e521dc8a536ef34c7a20aff52eeeacbfef28963195ed526c->leave($__internal_3c958eeb88bb7e62e521dc8a536ef34c7a20aff52eeeacbfef28963195ed526c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c397a97196eeedbfa216b8320905f55dd68c1be0219deaca3e887ff6ae9390c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c397a97196eeedbfa216b8320905f55dd68c1be0219deaca3e887ff6ae9390c->enter($__internal_2c397a97196eeedbfa216b8320905f55dd68c1be0219deaca3e887ff6ae9390c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b1ce9f2e10728fb56538dee754d9ca3817006812124ee92ced53531e0c3f2ed1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1ce9f2e10728fb56538dee754d9ca3817006812124ee92ced53531e0c3f2ed1->enter($__internal_b1ce9f2e10728fb56538dee754d9ca3817006812124ee92ced53531e0c3f2ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
    <div class=\"container-fluid\" id=\"header_container\">
        <div class=\"row\">
            <div class=\"col-lg-offset-9\">
                ";
        // line 16
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 17
            echo "                    Connecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "--<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
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
        </div>
    </div>
    <div class=\"container-fluid\" id=\"main_container\">
    <!-- START TOP NAVBAR-->
    ";
        // line 26
        $this->loadTemplate("navbar.html.twig", "@MALrm/Emploi/new.html.twig", 26)->display($context);
        // line 27
        echo "    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    ";
        // line 29
        $this->loadTemplate("sidebar.html.twig", "@MALrm/Emploi/new.html.twig", 29)->display($context);
        // line 30
        echo "    <!-- END SIDEBAR-->

    <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
        <div class=\"row\">
            <h3>AJOUTER UNE OFFRE</h3><hr style=\"border: 1px solid darkgray;\">
        </div>
        <div class=\"row\" id=\"head_row\">
            <h5>INTERFACE DE CREATION D'UNE NOUVELLE OFFRE:</h5>
        </div>
        <!-- BEGIN FORM -->
        <div class=\"row\" id=\"form_row\">
            <!-- BEGIN FORM-->
            ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("class" => "horizontal-form"));
        echo "
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Entreprise:</label>
                        ";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), 'errors');
        echo "
                        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Intitulé du poste:</label>
                        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "intitule", array()), 'errors');
        echo "
                        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "intitule", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-2\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Type de contrat:</label>
                        ";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contrat", array()), 'errors');
        echo "
                        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contrat", array()), 'widget');
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
        // line 77
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "villeCodePostal", array()), 'errors');
        echo "
                        ";
        // line 78
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "villeCodePostal", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        ";
        // line 84
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "villeActivite", array()), 'errors');
        echo "
                        ";
        // line 85
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "villeActivite", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Nombre de postes:</label>
                        ";
        // line 93
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombrePoste", array()), 'errors');
        echo "
                        ";
        // line 94
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombrePoste", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Site de parution:</label>
                        ";
        // line 100
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "siteParution", array()), 'errors');
        echo "
                        ";
        // line 101
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "siteParution", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-7\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Description du poste:</label>
                        ";
        // line 109
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
                        ";
        // line 110
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-offset-5\">
                    <button type=\"submit\" class=\"btn  btn-default\"><i class=\"fa fa-check\"></i>Enregistrer</button>
                </div>
            </div>
            ";
        // line 119
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            <!-- END FORM-->
        </div>
    </div>

";
        
        $__internal_b1ce9f2e10728fb56538dee754d9ca3817006812124ee92ced53531e0c3f2ed1->leave($__internal_b1ce9f2e10728fb56538dee754d9ca3817006812124ee92ced53531e0c3f2ed1_prof);

        
        $__internal_2c397a97196eeedbfa216b8320905f55dd68c1be0219deaca3e887ff6ae9390c->leave($__internal_2c397a97196eeedbfa216b8320905f55dd68c1be0219deaca3e887ff6ae9390c_prof);

    }

    public function getTemplateName()
    {
        return "@MALrm/Emploi/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 119,  262 => 110,  258 => 109,  247 => 101,  243 => 100,  234 => 94,  230 => 93,  219 => 85,  214 => 84,  206 => 78,  201 => 77,  186 => 64,  182 => 63,  173 => 57,  169 => 56,  158 => 48,  154 => 47,  146 => 42,  132 => 30,  130 => 29,  126 => 27,  124 => 26,  117 => 21,  111 => 19,  103 => 17,  101 => 16,  95 => 12,  86 => 11,  73 => 7,  64 => 6,  51 => 4,  42 => 3,  11 => 1,);
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
            <div class=\"col-lg-offset-9\">
                {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                    Connecté en tant que {{ app.user.username }}--<a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a>
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
            <h3>AJOUTER UNE OFFRE</h3><hr style=\"border: 1px solid darkgray;\">
        </div>
        <div class=\"row\" id=\"head_row\">
            <h5>INTERFACE DE CREATION D'UNE NOUVELLE OFFRE:</h5>
        </div>
        <!-- BEGIN FORM -->
        <div class=\"row\" id=\"form_row\">
            <!-- BEGIN FORM-->
            {{ form_start(form, {'class': 'horizontal-form'}) }}
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Entreprise:</label>
                        {{ form_errors(form.client)}}
                        {{ form_widget(form.client) }}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Intitulé du poste:</label>
                        {{ form_errors(form.intitule) }}
                        {{ form_widget(form.intitule) }}
                    </div>
                </div>
                <div class=\"col-lg-2\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Type de contrat:</label>
                        {{ form_errors(form.contrat)}}
                        {{ form_widget(form.contrat)}}
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
                        {{ form_errors(form.villeCodePostal) }}
                        {{ form_widget(form.villeCodePostal) }}
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        {#<label class=\"control-label\">Ville</label>#}
                        {{ form_errors(form.villeActivite) }}
                        {{ form_widget(form.villeActivite) }}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Nombre de postes:</label>
                        {{ form_errors(form.nombrePoste)}}
                        {{ form_widget(form.nombrePoste)}}
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Site de parution:</label>
                        {{ form_errors(form.siteParution)}}
                        {{ form_widget(form.siteParution)}}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-7\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Description du poste:</label>
                        {{ form_errors(form.description)}}
                        {{ form_widget(form.description) }}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-offset-5\">
                    <button type=\"submit\" class=\"btn  btn-default\"><i class=\"fa fa-check\"></i>Enregistrer</button>
                </div>
            </div>
            {{ form_end(form) }}
            <!-- END FORM-->
        </div>
    </div>

{% endblock %}", "@MALrm/Emploi/new.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle\\Resources\\views\\Emploi\\new.html.twig");
    }
}
