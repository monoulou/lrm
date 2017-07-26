<?php

/* MALrmBundle:Emploi:new.html.twig */
class __TwigTemplate_fee9eb8242d3d30f979e7cd4e1f72fc4af36862bccf73d1b8e7a473368155b17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MALrmBundle:Emploi:new.html.twig", 1);
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
        $__internal_b585282021f199f73aec180b16b2a8153b22e7f112727b35d274bd7325f68c74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b585282021f199f73aec180b16b2a8153b22e7f112727b35d274bd7325f68c74->enter($__internal_b585282021f199f73aec180b16b2a8153b22e7f112727b35d274bd7325f68c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Emploi:new.html.twig"));

        $__internal_917d65185b5bf17dbc1d369751c921c3d5380a303c5148e1fda3c09277cdfa64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_917d65185b5bf17dbc1d369751c921c3d5380a303c5148e1fda3c09277cdfa64->enter($__internal_917d65185b5bf17dbc1d369751c921c3d5380a303c5148e1fda3c09277cdfa64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Emploi:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b585282021f199f73aec180b16b2a8153b22e7f112727b35d274bd7325f68c74->leave($__internal_b585282021f199f73aec180b16b2a8153b22e7f112727b35d274bd7325f68c74_prof);

        
        $__internal_917d65185b5bf17dbc1d369751c921c3d5380a303c5148e1fda3c09277cdfa64->leave($__internal_917d65185b5bf17dbc1d369751c921c3d5380a303c5148e1fda3c09277cdfa64_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d95ced95e53def10f32b526ca910cae990a58a0de331e116cb51c813f7c0343d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d95ced95e53def10f32b526ca910cae990a58a0de331e116cb51c813f7c0343d->enter($__internal_d95ced95e53def10f32b526ca910cae990a58a0de331e116cb51c813f7c0343d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_69b735fea1698ac71091e41e69885e8f5fc1c893d5e8e72373a44aab5e8ea091 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69b735fea1698ac71091e41e69885e8f5fc1c893d5e8e72373a44aab5e8ea091->enter($__internal_69b735fea1698ac71091e41e69885e8f5fc1c893d5e8e72373a44aab5e8ea091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_69b735fea1698ac71091e41e69885e8f5fc1c893d5e8e72373a44aab5e8ea091->leave($__internal_69b735fea1698ac71091e41e69885e8f5fc1c893d5e8e72373a44aab5e8ea091_prof);

        
        $__internal_d95ced95e53def10f32b526ca910cae990a58a0de331e116cb51c813f7c0343d->leave($__internal_d95ced95e53def10f32b526ca910cae990a58a0de331e116cb51c813f7c0343d_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0d344fe73068d74c63a9703177f7cee85476afe1e4a7db7ea026369f96dcfa66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d344fe73068d74c63a9703177f7cee85476afe1e4a7db7ea026369f96dcfa66->enter($__internal_0d344fe73068d74c63a9703177f7cee85476afe1e4a7db7ea026369f96dcfa66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c4e7cfc3033bf8cc6ec44630cd72ea10715390d072b21f3ace037f0e1ecbcedd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4e7cfc3033bf8cc6ec44630cd72ea10715390d072b21f3ace037f0e1ecbcedd->enter($__internal_c4e7cfc3033bf8cc6ec44630cd72ea10715390d072b21f3ace037f0e1ecbcedd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ville.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_c4e7cfc3033bf8cc6ec44630cd72ea10715390d072b21f3ace037f0e1ecbcedd->leave($__internal_c4e7cfc3033bf8cc6ec44630cd72ea10715390d072b21f3ace037f0e1ecbcedd_prof);

        
        $__internal_0d344fe73068d74c63a9703177f7cee85476afe1e4a7db7ea026369f96dcfa66->leave($__internal_0d344fe73068d74c63a9703177f7cee85476afe1e4a7db7ea026369f96dcfa66_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_301d1bfa902ea2702bb0fe074a950e250db12d6cd83e28b338fea46c226543a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_301d1bfa902ea2702bb0fe074a950e250db12d6cd83e28b338fea46c226543a5->enter($__internal_301d1bfa902ea2702bb0fe074a950e250db12d6cd83e28b338fea46c226543a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bbeeec5cbe3d7e66e3f28dd52bb7b0e9a9009f8782f3fc858a262fbc5f780611 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbeeec5cbe3d7e66e3f28dd52bb7b0e9a9009f8782f3fc858a262fbc5f780611->enter($__internal_bbeeec5cbe3d7e66e3f28dd52bb7b0e9a9009f8782f3fc858a262fbc5f780611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
    <div class=\"container-fluid\" id=\"header_container\">
        <div class=\"row\">
            <div class=\"col-lg-offset-10\">
                ";
        // line 16
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 17
            echo "                    <div class=\"row\">
                        <i class=\"material-icons\">person</i> Bonjour, ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "--<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
                    </div>
                ";
        } else {
            // line 21
            echo "                    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
                ";
        }
        // line 23
        echo "            </div>
        </div>
    </div>
    <div class=\"container-fluid\" id=\"main_container\">
    <!-- START TOP NAVBAR-->
    ";
        // line 28
        $this->loadTemplate("navbar.html.twig", "MALrmBundle:Emploi:new.html.twig", 28)->display($context);
        // line 29
        echo "    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    ";
        // line 31
        $this->loadTemplate("sidebar.html.twig", "MALrmBundle:Emploi:new.html.twig", 31)->display($context);
        // line 32
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
        // line 44
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("class" => "horizontal-form"));
        echo "
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Entreprise:</label>
                        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), 'errors');
        echo "
                        ";
        // line 50
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
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "intitule", array()), 'errors');
        echo "
                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "intitule", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-2\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Type de contrat:</label>
                        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contrat", array()), 'errors');
        echo "
                        ";
        // line 66
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
        // line 79
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "villeCodePostal", array()), 'errors');
        echo "
                        ";
        // line 80
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "villeCodePostal", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        ";
        // line 86
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "villeActivite", array()), 'errors');
        echo "
                        ";
        // line 87
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
        // line 95
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombrePoste", array()), 'errors');
        echo "
                        ";
        // line 96
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombrePoste", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Site de parution:</label>
                        ";
        // line 102
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "siteParution", array()), 'errors');
        echo "
                        ";
        // line 103
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "siteParution", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Description du poste:</label>
                        ";
        // line 111
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
                        ";
        // line 112
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-offset-5\">
                    <button type=\"submit\" class=\"btn  btn-default\"><i class=\"fa fa-check\" ></i>Enregistrer</button>
                </div>
            </div>
            ";
        // line 121
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            <!-- END FORM-->
        </div>
    </div>

";
        
        $__internal_bbeeec5cbe3d7e66e3f28dd52bb7b0e9a9009f8782f3fc858a262fbc5f780611->leave($__internal_bbeeec5cbe3d7e66e3f28dd52bb7b0e9a9009f8782f3fc858a262fbc5f780611_prof);

        
        $__internal_301d1bfa902ea2702bb0fe074a950e250db12d6cd83e28b338fea46c226543a5->leave($__internal_301d1bfa902ea2702bb0fe074a950e250db12d6cd83e28b338fea46c226543a5_prof);

    }

    public function getTemplateName()
    {
        return "MALrmBundle:Emploi:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 121,  265 => 112,  261 => 111,  250 => 103,  246 => 102,  237 => 96,  233 => 95,  222 => 87,  217 => 86,  209 => 80,  204 => 79,  189 => 66,  185 => 65,  176 => 59,  172 => 58,  161 => 50,  157 => 49,  149 => 44,  135 => 32,  133 => 31,  129 => 29,  127 => 28,  120 => 23,  114 => 21,  106 => 18,  103 => 17,  101 => 16,  95 => 12,  86 => 11,  73 => 7,  64 => 6,  51 => 4,  42 => 3,  11 => 1,);
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
                    <div class=\"row\">
                        <i class=\"material-icons\">person</i> Bonjour, {{ app.user.username }}--<a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a>
                    </div>
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
                <div class=\"col-lg-6\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Description du poste:</label>
                        {{ form_errors(form.description)}}
                        {{ form_widget(form.description) }}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-offset-5\">
                    <button type=\"submit\" class=\"btn  btn-default\"><i class=\"fa fa-check\" ></i>Enregistrer</button>
                </div>
            </div>
            {{ form_end(form) }}
            <!-- END FORM-->
        </div>
    </div>

{% endblock %}", "MALrmBundle:Emploi:new.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle\\Resources\\views\\Emploi\\new.html.twig");
    }
}
