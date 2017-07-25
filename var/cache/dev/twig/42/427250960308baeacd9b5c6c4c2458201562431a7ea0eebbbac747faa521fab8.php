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
        $__internal_3ea6cf4cab12dfdfb35d77f1ea1ada147059308f809361e52e5edfbc78dc9be7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ea6cf4cab12dfdfb35d77f1ea1ada147059308f809361e52e5edfbc78dc9be7->enter($__internal_3ea6cf4cab12dfdfb35d77f1ea1ada147059308f809361e52e5edfbc78dc9be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Emploi:new.html.twig"));

        $__internal_7f5f897ce0a9e0d49d8599c3c5d40b70e29618b60d9dd2b924f28b18fef65f4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f5f897ce0a9e0d49d8599c3c5d40b70e29618b60d9dd2b924f28b18fef65f4a->enter($__internal_7f5f897ce0a9e0d49d8599c3c5d40b70e29618b60d9dd2b924f28b18fef65f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Emploi:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ea6cf4cab12dfdfb35d77f1ea1ada147059308f809361e52e5edfbc78dc9be7->leave($__internal_3ea6cf4cab12dfdfb35d77f1ea1ada147059308f809361e52e5edfbc78dc9be7_prof);

        
        $__internal_7f5f897ce0a9e0d49d8599c3c5d40b70e29618b60d9dd2b924f28b18fef65f4a->leave($__internal_7f5f897ce0a9e0d49d8599c3c5d40b70e29618b60d9dd2b924f28b18fef65f4a_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_380b20ca7e90ebd5807a19dbfc95c328451d315848cdae98591e111cee75029d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_380b20ca7e90ebd5807a19dbfc95c328451d315848cdae98591e111cee75029d->enter($__internal_380b20ca7e90ebd5807a19dbfc95c328451d315848cdae98591e111cee75029d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ed42fde9a11d425084ad2a291e60eba848dfb349927f20db372506e79e6cd606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed42fde9a11d425084ad2a291e60eba848dfb349927f20db372506e79e6cd606->enter($__internal_ed42fde9a11d425084ad2a291e60eba848dfb349927f20db372506e79e6cd606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_ed42fde9a11d425084ad2a291e60eba848dfb349927f20db372506e79e6cd606->leave($__internal_ed42fde9a11d425084ad2a291e60eba848dfb349927f20db372506e79e6cd606_prof);

        
        $__internal_380b20ca7e90ebd5807a19dbfc95c328451d315848cdae98591e111cee75029d->leave($__internal_380b20ca7e90ebd5807a19dbfc95c328451d315848cdae98591e111cee75029d_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5fd2d2e63e048b10154d7450e37882b8e36781779adf741542d6e8f952138540 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fd2d2e63e048b10154d7450e37882b8e36781779adf741542d6e8f952138540->enter($__internal_5fd2d2e63e048b10154d7450e37882b8e36781779adf741542d6e8f952138540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ee38798256b300c5b99f17c6d0208f9239ada200e29b6a5f740f73e5faaa33d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee38798256b300c5b99f17c6d0208f9239ada200e29b6a5f740f73e5faaa33d1->enter($__internal_ee38798256b300c5b99f17c6d0208f9239ada200e29b6a5f740f73e5faaa33d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ville.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_ee38798256b300c5b99f17c6d0208f9239ada200e29b6a5f740f73e5faaa33d1->leave($__internal_ee38798256b300c5b99f17c6d0208f9239ada200e29b6a5f740f73e5faaa33d1_prof);

        
        $__internal_5fd2d2e63e048b10154d7450e37882b8e36781779adf741542d6e8f952138540->leave($__internal_5fd2d2e63e048b10154d7450e37882b8e36781779adf741542d6e8f952138540_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_06569d5b1d3e21c11683af81a127c7295f4ffd020e3ee6182afe11dcd96e467e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06569d5b1d3e21c11683af81a127c7295f4ffd020e3ee6182afe11dcd96e467e->enter($__internal_06569d5b1d3e21c11683af81a127c7295f4ffd020e3ee6182afe11dcd96e467e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8199bb0c9be01e5c52db9c4b020a60b75953a875a3951be156f0332be318c85a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8199bb0c9be01e5c52db9c4b020a60b75953a875a3951be156f0332be318c85a->enter($__internal_8199bb0c9be01e5c52db9c4b020a60b75953a875a3951be156f0332be318c85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("navbar.html.twig", "MALrmBundle:Emploi:new.html.twig", 26)->display($context);
        // line 27
        echo "    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    ";
        // line 29
        $this->loadTemplate("sidebar.html.twig", "MALrmBundle:Emploi:new.html.twig", 29)->display($context);
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
        
        $__internal_8199bb0c9be01e5c52db9c4b020a60b75953a875a3951be156f0332be318c85a->leave($__internal_8199bb0c9be01e5c52db9c4b020a60b75953a875a3951be156f0332be318c85a_prof);

        
        $__internal_06569d5b1d3e21c11683af81a127c7295f4ffd020e3ee6182afe11dcd96e467e->leave($__internal_06569d5b1d3e21c11683af81a127c7295f4ffd020e3ee6182afe11dcd96e467e_prof);

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

{% endblock %}", "MALrmBundle:Emploi:new.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle\\Resources\\views\\Emploi\\new.html.twig");
    }
}
