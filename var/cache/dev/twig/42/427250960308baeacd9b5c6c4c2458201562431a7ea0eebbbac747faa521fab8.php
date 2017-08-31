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
        $__internal_194f23995b0fb7dc018189c7a3f0edfbc5c7ba13af306a8abc91c354e0497e9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_194f23995b0fb7dc018189c7a3f0edfbc5c7ba13af306a8abc91c354e0497e9e->enter($__internal_194f23995b0fb7dc018189c7a3f0edfbc5c7ba13af306a8abc91c354e0497e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MALrm/Emploi/new.html.twig"));

        $__internal_ff6187fcb3b115540506b2e26c950f3745f0fbff03eeba8ec5301aa84a03aeba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff6187fcb3b115540506b2e26c950f3745f0fbff03eeba8ec5301aa84a03aeba->enter($__internal_ff6187fcb3b115540506b2e26c950f3745f0fbff03eeba8ec5301aa84a03aeba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MALrm/Emploi/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_194f23995b0fb7dc018189c7a3f0edfbc5c7ba13af306a8abc91c354e0497e9e->leave($__internal_194f23995b0fb7dc018189c7a3f0edfbc5c7ba13af306a8abc91c354e0497e9e_prof);

        
        $__internal_ff6187fcb3b115540506b2e26c950f3745f0fbff03eeba8ec5301aa84a03aeba->leave($__internal_ff6187fcb3b115540506b2e26c950f3745f0fbff03eeba8ec5301aa84a03aeba_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d02e485fd25b8268184cccc1bd0d2b5825520505246630ab778ba7e3fb1f34af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d02e485fd25b8268184cccc1bd0d2b5825520505246630ab778ba7e3fb1f34af->enter($__internal_d02e485fd25b8268184cccc1bd0d2b5825520505246630ab778ba7e3fb1f34af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2e9db8b47804165abe8bce42b025993d9b583fce8fa376ce0b36f90b47dea0d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e9db8b47804165abe8bce42b025993d9b583fce8fa376ce0b36f90b47dea0d1->enter($__internal_2e9db8b47804165abe8bce42b025993d9b583fce8fa376ce0b36f90b47dea0d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_2e9db8b47804165abe8bce42b025993d9b583fce8fa376ce0b36f90b47dea0d1->leave($__internal_2e9db8b47804165abe8bce42b025993d9b583fce8fa376ce0b36f90b47dea0d1_prof);

        
        $__internal_d02e485fd25b8268184cccc1bd0d2b5825520505246630ab778ba7e3fb1f34af->leave($__internal_d02e485fd25b8268184cccc1bd0d2b5825520505246630ab778ba7e3fb1f34af_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_52a10c2912812e396c236978aabda143ba5b88ac9e14c50a9244223f2f20b864 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52a10c2912812e396c236978aabda143ba5b88ac9e14c50a9244223f2f20b864->enter($__internal_52a10c2912812e396c236978aabda143ba5b88ac9e14c50a9244223f2f20b864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_96251c6a377e4b6df40c425ba6e625fdadc0d02f9eed6fedfaa272579c7079e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96251c6a377e4b6df40c425ba6e625fdadc0d02f9eed6fedfaa272579c7079e6->enter($__internal_96251c6a377e4b6df40c425ba6e625fdadc0d02f9eed6fedfaa272579c7079e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ville.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_96251c6a377e4b6df40c425ba6e625fdadc0d02f9eed6fedfaa272579c7079e6->leave($__internal_96251c6a377e4b6df40c425ba6e625fdadc0d02f9eed6fedfaa272579c7079e6_prof);

        
        $__internal_52a10c2912812e396c236978aabda143ba5b88ac9e14c50a9244223f2f20b864->leave($__internal_52a10c2912812e396c236978aabda143ba5b88ac9e14c50a9244223f2f20b864_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c5572a0f116d7abbd54b3ba21dc495f381304b4b3cb12d4e39228ea7662dcf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c5572a0f116d7abbd54b3ba21dc495f381304b4b3cb12d4e39228ea7662dcf3->enter($__internal_5c5572a0f116d7abbd54b3ba21dc495f381304b4b3cb12d4e39228ea7662dcf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ced6d32dd3c004dcb0cfa7d4363f4ab48dbbc07f1f3afd8c1329825780d77e27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ced6d32dd3c004dcb0cfa7d4363f4ab48dbbc07f1f3afd8c1329825780d77e27->enter($__internal_ced6d32dd3c004dcb0cfa7d4363f4ab48dbbc07f1f3afd8c1329825780d77e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("navbar.html.twig", "@MALrm/Emploi/new.html.twig", 28)->display($context);
        // line 29
        echo "    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    ";
        // line 31
        $this->loadTemplate("sidebar.html.twig", "@MALrm/Emploi/new.html.twig", 31)->display($context);
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
        
        $__internal_ced6d32dd3c004dcb0cfa7d4363f4ab48dbbc07f1f3afd8c1329825780d77e27->leave($__internal_ced6d32dd3c004dcb0cfa7d4363f4ab48dbbc07f1f3afd8c1329825780d77e27_prof);

        
        $__internal_5c5572a0f116d7abbd54b3ba21dc495f381304b4b3cb12d4e39228ea7662dcf3->leave($__internal_5c5572a0f116d7abbd54b3ba21dc495f381304b4b3cb12d4e39228ea7662dcf3_prof);

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

{% endblock %}", "@MALrm/Emploi/new.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle\\Resources\\views\\Emploi\\new.html.twig");
    }
}
