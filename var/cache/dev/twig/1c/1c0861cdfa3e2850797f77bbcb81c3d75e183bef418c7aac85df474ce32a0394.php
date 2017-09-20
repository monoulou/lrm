<?php

/* MALrmBundle:Emploi:new.html.twig */
class __TwigTemplate_b3355f5236b6ecfc390943b552089099cd024316fb47e4e409c9021d1bfce59e extends Twig_Template
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
        $__internal_44ca4f8369d4e2992188d63a2d55fd32465d425f16533c6e00fa50778e1e43a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44ca4f8369d4e2992188d63a2d55fd32465d425f16533c6e00fa50778e1e43a4->enter($__internal_44ca4f8369d4e2992188d63a2d55fd32465d425f16533c6e00fa50778e1e43a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Emploi:new.html.twig"));

        $__internal_e07e51d505b00009f2f793f2f013c8d07e4f911bd3ee1b829440ba2b0982db94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e07e51d505b00009f2f793f2f013c8d07e4f911bd3ee1b829440ba2b0982db94->enter($__internal_e07e51d505b00009f2f793f2f013c8d07e4f911bd3ee1b829440ba2b0982db94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Emploi:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44ca4f8369d4e2992188d63a2d55fd32465d425f16533c6e00fa50778e1e43a4->leave($__internal_44ca4f8369d4e2992188d63a2d55fd32465d425f16533c6e00fa50778e1e43a4_prof);

        
        $__internal_e07e51d505b00009f2f793f2f013c8d07e4f911bd3ee1b829440ba2b0982db94->leave($__internal_e07e51d505b00009f2f793f2f013c8d07e4f911bd3ee1b829440ba2b0982db94_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ba66ede1cd93147b409a3706fabf3204cb2dc6a7bf5b7e6e728bdb6486eec4ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba66ede1cd93147b409a3706fabf3204cb2dc6a7bf5b7e6e728bdb6486eec4ad->enter($__internal_ba66ede1cd93147b409a3706fabf3204cb2dc6a7bf5b7e6e728bdb6486eec4ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_73f0ef2fb9a47636a8f73407e37ca9099221cbaa83ee50b653c4481e5ada50bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73f0ef2fb9a47636a8f73407e37ca9099221cbaa83ee50b653c4481e5ada50bb->enter($__internal_73f0ef2fb9a47636a8f73407e37ca9099221cbaa83ee50b653c4481e5ada50bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_73f0ef2fb9a47636a8f73407e37ca9099221cbaa83ee50b653c4481e5ada50bb->leave($__internal_73f0ef2fb9a47636a8f73407e37ca9099221cbaa83ee50b653c4481e5ada50bb_prof);

        
        $__internal_ba66ede1cd93147b409a3706fabf3204cb2dc6a7bf5b7e6e728bdb6486eec4ad->leave($__internal_ba66ede1cd93147b409a3706fabf3204cb2dc6a7bf5b7e6e728bdb6486eec4ad_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_43355e0421b89ad30a88dca784a6072fda7e0efa1cd6602c22447fda32ee6476 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43355e0421b89ad30a88dca784a6072fda7e0efa1cd6602c22447fda32ee6476->enter($__internal_43355e0421b89ad30a88dca784a6072fda7e0efa1cd6602c22447fda32ee6476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0a4349edfe843003697b7a5c9fe5eaa753932fe959bda38447f7c78045d07fdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a4349edfe843003697b7a5c9fe5eaa753932fe959bda38447f7c78045d07fdf->enter($__internal_0a4349edfe843003697b7a5c9fe5eaa753932fe959bda38447f7c78045d07fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ville.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_0a4349edfe843003697b7a5c9fe5eaa753932fe959bda38447f7c78045d07fdf->leave($__internal_0a4349edfe843003697b7a5c9fe5eaa753932fe959bda38447f7c78045d07fdf_prof);

        
        $__internal_43355e0421b89ad30a88dca784a6072fda7e0efa1cd6602c22447fda32ee6476->leave($__internal_43355e0421b89ad30a88dca784a6072fda7e0efa1cd6602c22447fda32ee6476_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5ca9c28fa3cbfcaae2e1c47ea064748995a24ecd907077d9502c27abe6c2e94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5ca9c28fa3cbfcaae2e1c47ea064748995a24ecd907077d9502c27abe6c2e94->enter($__internal_d5ca9c28fa3cbfcaae2e1c47ea064748995a24ecd907077d9502c27abe6c2e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9fe91e86926f2303dc448e640356eedce72294bc7351bf6b01bc56a642a52e04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fe91e86926f2303dc448e640356eedce72294bc7351bf6b01bc56a642a52e04->enter($__internal_9fe91e86926f2303dc448e640356eedce72294bc7351bf6b01bc56a642a52e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("navbar.html.twig", "MALrmBundle:Emploi:new.html.twig", 27)->display($context);
        // line 28
        echo "    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    ";
        // line 30
        $this->loadTemplate("sidebar.html.twig", "MALrmBundle:Emploi:new.html.twig", 30)->display($context);
        // line 31
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
            <div class=\"col-lg-6\" id=\"block_left_emploi\">
                <!-- BEGIN FORM-->
                ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("class" => "horizontal-form"));
        echo "
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Entreprise <span class=\"star\">*</span></label>
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
                    <div class=\"col-lg-6\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Intitulé du poste <span class=\"star\">*</span></label>
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
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-3\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Contrat <span class=\"star\">*</span></label>
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
                    <div class=\"col-lg-4\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Code postal <span class=\"star\">*</span></label>
                            ";
        // line 72
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "villeCodePostal", array()), 'errors');
        echo "
                            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "villeCodePostal", array()), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"col-lg-5\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Ville <span class=\"star\">*</span></label>
                            ";
        // line 79
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "villeActivite", array()), 'errors');
        echo "
                            ";
        // line 80
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "villeActivite", array()), 'widget');
        echo "
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6\" id=\"block_right_emploi\">
                <div class=\"row\">
                    <div class=\"col-lg-5\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Nombre de postes <span class=\"star\">*</span></label>
                            ";
        // line 90
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombrePoste", array()), 'errors');
        echo "
                            ";
        // line 91
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombrePoste", array()), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"col-lg-7\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Site de parution <span class=\"star\">*</span></label>
                            ";
        // line 97
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "siteParution", array()), 'errors');
        echo "
                            ";
        // line 98
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "siteParution", array()), 'widget');
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Description du poste</label>
                            ";
        // line 106
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
                            ";
        // line 107
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-offset-7 col-lg-5\">
                        <button type=\"submit\" style=\"width: 100%;\" class=\"btn  btn-default\"><i class=\"fa fa-check\" ></i>Enregistrer</button>
                    </div>
                </div>
                ";
        // line 116
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                <!-- END FORM-->
            </div>
        </div>
    </div>

";
        
        $__internal_9fe91e86926f2303dc448e640356eedce72294bc7351bf6b01bc56a642a52e04->leave($__internal_9fe91e86926f2303dc448e640356eedce72294bc7351bf6b01bc56a642a52e04_prof);

        
        $__internal_d5ca9c28fa3cbfcaae2e1c47ea064748995a24ecd907077d9502c27abe6c2e94->leave($__internal_d5ca9c28fa3cbfcaae2e1c47ea064748995a24ecd907077d9502c27abe6c2e94_prof);

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
        return array (  272 => 116,  260 => 107,  256 => 106,  245 => 98,  241 => 97,  232 => 91,  228 => 90,  215 => 80,  211 => 79,  202 => 73,  198 => 72,  189 => 66,  185 => 65,  174 => 57,  170 => 56,  161 => 50,  157 => 49,  149 => 44,  134 => 31,  132 => 30,  128 => 28,  126 => 27,  118 => 22,  115 => 21,  109 => 19,  103 => 17,  101 => 16,  95 => 12,  86 => 11,  73 => 7,  64 => 6,  51 => 4,  42 => 3,  11 => 1,);
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
            <h3>AJOUTER UNE OFFRE</h3><hr style=\"border: 1px solid darkgray;\">
        </div>
        <div class=\"row\" id=\"head_row\">
            <h5>INTERFACE DE CREATION D'UNE NOUVELLE OFFRE:</h5>
        </div>
        <!-- BEGIN FORM -->
        <div class=\"row\" id=\"form_row\">
            <div class=\"col-lg-6\" id=\"block_left_emploi\">
                <!-- BEGIN FORM-->
                {{ form_start(form, {'class': 'horizontal-form'}) }}
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Entreprise <span class=\"star\">*</span></label>
                            {{ form_errors(form.client)}}
                            {{ form_widget(form.client) }}
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Intitulé du poste <span class=\"star\">*</span></label>
                            {{ form_errors(form.intitule) }}
                            {{ form_widget(form.intitule) }}
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-3\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Contrat <span class=\"star\">*</span></label>
                            {{ form_errors(form.contrat)}}
                            {{ form_widget(form.contrat)}}
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Code postal <span class=\"star\">*</span></label>
                            {{ form_errors(form.villeCodePostal) }}
                            {{ form_widget(form.villeCodePostal) }}
                        </div>
                    </div>
                    <div class=\"col-lg-5\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Ville <span class=\"star\">*</span></label>
                            {{ form_errors(form.villeActivite) }}
                            {{ form_widget(form.villeActivite) }}
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6\" id=\"block_right_emploi\">
                <div class=\"row\">
                    <div class=\"col-lg-5\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Nombre de postes <span class=\"star\">*</span></label>
                            {{ form_errors(form.nombrePoste)}}
                            {{ form_widget(form.nombrePoste)}}
                        </div>
                    </div>
                    <div class=\"col-lg-7\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Site de parution <span class=\"star\">*</span></label>
                            {{ form_errors(form.siteParution)}}
                            {{ form_widget(form.siteParution)}}
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Description du poste</label>
                            {{ form_errors(form.description)}}
                            {{ form_widget(form.description) }}
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-offset-7 col-lg-5\">
                        <button type=\"submit\" style=\"width: 100%;\" class=\"btn  btn-default\"><i class=\"fa fa-check\" ></i>Enregistrer</button>
                    </div>
                </div>
                {{ form_end(form) }}
                <!-- END FORM-->
            </div>
        </div>
    </div>

{% endblock %}", "MALrmBundle:Emploi:new.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle/Resources/views/Emploi/new.html.twig");
    }
}
