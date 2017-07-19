<?php

/* @MALrm/Client/new_s.html.twig */
class __TwigTemplate_c9999209bbbefc07fbf26353d5cd250900c95b69a9cddae14d876f67af1a45a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@MALrm/Client/new_s.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a7a384e84ec2ad799a964930a53fcf08a44a195ee9adbf09273587440d126221 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7a384e84ec2ad799a964930a53fcf08a44a195ee9adbf09273587440d126221->enter($__internal_a7a384e84ec2ad799a964930a53fcf08a44a195ee9adbf09273587440d126221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MALrm/Client/new_s.html.twig"));

        $__internal_af44198bdae0d61f04dbad06eacebfda1b2dcfa6ab6172b5ba223d957e70ba00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af44198bdae0d61f04dbad06eacebfda1b2dcfa6ab6172b5ba223d957e70ba00->enter($__internal_af44198bdae0d61f04dbad06eacebfda1b2dcfa6ab6172b5ba223d957e70ba00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MALrm/Client/new_s.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7a384e84ec2ad799a964930a53fcf08a44a195ee9adbf09273587440d126221->leave($__internal_a7a384e84ec2ad799a964930a53fcf08a44a195ee9adbf09273587440d126221_prof);

        
        $__internal_af44198bdae0d61f04dbad06eacebfda1b2dcfa6ab6172b5ba223d957e70ba00->leave($__internal_af44198bdae0d61f04dbad06eacebfda1b2dcfa6ab6172b5ba223d957e70ba00_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5b1b4b78d61a13cdc2c8af7082bedb43aaa0389f09d115dd4281b40d3f581690 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b1b4b78d61a13cdc2c8af7082bedb43aaa0389f09d115dd4281b40d3f581690->enter($__internal_5b1b4b78d61a13cdc2c8af7082bedb43aaa0389f09d115dd4281b40d3f581690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f4056ed459f8a7d33628b23ebde988aaa63901d4e19a0f8483d586e1e8b583c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4056ed459f8a7d33628b23ebde988aaa63901d4e19a0f8483d586e1e8b583c3->enter($__internal_f4056ed459f8a7d33628b23ebde988aaa63901d4e19a0f8483d586e1e8b583c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_f4056ed459f8a7d33628b23ebde988aaa63901d4e19a0f8483d586e1e8b583c3->leave($__internal_f4056ed459f8a7d33628b23ebde988aaa63901d4e19a0f8483d586e1e8b583c3_prof);

        
        $__internal_5b1b4b78d61a13cdc2c8af7082bedb43aaa0389f09d115dd4281b40d3f581690->leave($__internal_5b1b4b78d61a13cdc2c8af7082bedb43aaa0389f09d115dd4281b40d3f581690_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa252b94f4c7598bf6572fff96cbfe273fc7eb9ea8a8ade22a2dd22747f6266d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa252b94f4c7598bf6572fff96cbfe273fc7eb9ea8a8ade22a2dd22747f6266d->enter($__internal_fa252b94f4c7598bf6572fff96cbfe273fc7eb9ea8a8ade22a2dd22747f6266d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a2f5afd28f854550b1abddc234b94d5bfa80fa07e7e4665cb3a225bede7cf94e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2f5afd28f854550b1abddc234b94d5bfa80fa07e7e4665cb3a225bede7cf94e->enter($__internal_a2f5afd28f854550b1abddc234b94d5bfa80fa07e7e4665cb3a225bede7cf94e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <div class=\"container-fluid\" id=\"header_container\">
        <div class=\"row\">
            <div class=\"col-lg-offset-9\">
                ";
        // line 12
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 13
            echo "                    Connecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "--<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
                ";
        } else {
            // line 15
            echo "                    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
                ";
        }
        // line 17
        echo "            </div>
        </div>
    </div>
    <div class=\"container-fluid\" id=\"main_container\">
        <!-- START TOP NAVBAR-->
        ";
        // line 22
        $this->loadTemplate("navbar.html.twig", "@MALrm/Client/new_s.html.twig", 22)->display($context);
        // line 23
        echo "        <!-- END TOP NAVBAR -->
        <!-- START SIDEBAR-->
        ";
        // line 25
        $this->loadTemplate("sidebar.html.twig", "@MALrm/Client/new_s.html.twig", 25)->display($context);
        // line 26
        echo "        <!-- END SIDEBAR-->

        <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
            <div class=\"row\">
                <h3>AJOUTER UNE ENTREPRISE</h3><hr style=\"border: 1px solid darkgray;\">
            </div>
            <div class=\"row\" id=\"head_row\">
                <h5>INTERFACE DE CREATION D'UNE NOUVELLE ENTREPRISE:</h5>
            </div>
            <!-- BEGIN FORM -->
            <div class=\"row\" id=\"form_row\">
                <!-- BEGIN FORM-->
                ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("class" => "horizontal-form"));
        echo "
                <div class=\"form-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"col-md-6\" style=\"margin: 0;padding: 0 10px 0 0;\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Client</label>
                                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "denomination", array()), 'errors');
        echo "
                                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "denomination", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-9\" style=\"margin: 0;padding: 0 0 0 10px;\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">Adresse</label>
                                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'errors');
        echo "
                                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <!--/span-->
                        <div class=\"col-md-6\">
                            <div class=\"col-md-6\" style=\"margin: 0;padding: 0 10px 0 0;\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Ville</label>
                                    ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'errors');
        echo "
                                    ";
        // line 67
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                            </div>
                            <div class=\"col-md-6\" style=\"margin: 0;padding: 0 0 0 10px;\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Département</label>
                                    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departement", array()), 'errors');
        echo "
                                    ";
        // line 74
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departement", array()), 'widget', array("attr" => array("class" => "form-control js-datepicker")));
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"col-md-6\" style=\"margin: 0; padding: 0 0 0 10px;\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Pays</label>
                                    ";
        // line 82
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'errors');
        echo "
                                    ";
        // line 83
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <!--/row-->
                    <div class=\"row\">
                        <!--/span-->
                        <div class=\"col-md-6\">
                            <div class=\"col-md-6\" style=\"margin: 0;padding: 0 10px 0 0;\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Nom du contact</label>
                                    ";
        // line 96
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomContact", array()), 'errors');
        echo "
                                    ";
        // line 97
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomContact", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                            </div>
                            <div class=\"col-md-6\" style=\"margin: 0;padding: 0 0 0 10px;\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Fonction du contact</label>
                                    ";
        // line 103
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fonctionContact", array()), 'errors');
        echo "
                                    ";
        // line 104
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fonctionContact", array()), 'widget', array("attr" => array("class" => "form-control js-datepicker")));
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"col-md-6\" style=\"margin: 0; padding: 0 0 0 10px;\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Téléphone</label>
                                    ";
        // line 112
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'errors');
        echo "
                                    ";
        // line 113
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <!--/row-->
                    <div class=\"row\">
                        <!--/span-->
                        <div class=\"col-md-6\">
                            <div class=\"col-md-6\" style=\"margin: 0;padding: 0 10px 0 0;\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Charge RH</label>
                                    ";
        // line 126
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "chargeRecrutement", array()), 'errors');
        echo "
                                    ";
        // line 127
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "chargeRecrutement", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                            </div>
                            <div class=\"col-md-6\" style=\"margin: 0;padding: 0 0 0 10px;\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Etat</label>
                                    ";
        // line 133
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "etat", array()), 'errors');
        echo "
                                    ";
        // line 134
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "etat", array()), 'widget', array("attr" => array("class" => "form-control js-datepicker")));
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"col-md-6\" style=\"margin: 0; padding: 0 0 0 10px;\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Profil</label>
                                    ";
        // line 142
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeClient", array()), 'errors');
        echo "
                                    ";
        // line 143
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeClient", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-9\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">Commentaires</label>
                                ";
        // line 153
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'errors');
        echo "
                                ";
        // line 154
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                        </div>
                    </div>
                ";
        // line 158
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
                <!-- END FORM-->
        </div>
    </div>

";
        
        $__internal_a2f5afd28f854550b1abddc234b94d5bfa80fa07e7e4665cb3a225bede7cf94e->leave($__internal_a2f5afd28f854550b1abddc234b94d5bfa80fa07e7e4665cb3a225bede7cf94e_prof);

        
        $__internal_fa252b94f4c7598bf6572fff96cbfe273fc7eb9ea8a8ade22a2dd22747f6266d->leave($__internal_fa252b94f4c7598bf6572fff96cbfe273fc7eb9ea8a8ade22a2dd22747f6266d_prof);

    }

    // line 167
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_63277205cf636a913234babfaa2e22cc6c7f29d78d252e44b02a0be4e755bb6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63277205cf636a913234babfaa2e22cc6c7f29d78d252e44b02a0be4e755bb6b->enter($__internal_63277205cf636a913234babfaa2e22cc6c7f29d78d252e44b02a0be4e755bb6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_fe9741173d32871197835fc900cb051071bea9d90ca8b8485ad93c67dbc56a52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe9741173d32871197835fc900cb051071bea9d90ca8b8485ad93c67dbc56a52->enter($__internal_fe9741173d32871197835fc900cb051071bea9d90ca8b8485ad93c67dbc56a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fe9741173d32871197835fc900cb051071bea9d90ca8b8485ad93c67dbc56a52->leave($__internal_fe9741173d32871197835fc900cb051071bea9d90ca8b8485ad93c67dbc56a52_prof);

        
        $__internal_63277205cf636a913234babfaa2e22cc6c7f29d78d252e44b02a0be4e755bb6b->leave($__internal_63277205cf636a913234babfaa2e22cc6c7f29d78d252e44b02a0be4e755bb6b_prof);

    }

    public function getTemplateName()
    {
        return "@MALrm/Client/new_s.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 167,  319 => 158,  312 => 154,  308 => 153,  295 => 143,  291 => 142,  280 => 134,  276 => 133,  267 => 127,  263 => 126,  247 => 113,  243 => 112,  232 => 104,  228 => 103,  219 => 97,  215 => 96,  199 => 83,  195 => 82,  184 => 74,  180 => 73,  171 => 67,  167 => 66,  154 => 56,  150 => 55,  138 => 46,  134 => 45,  124 => 38,  110 => 26,  108 => 25,  104 => 23,  102 => 22,  95 => 17,  89 => 15,  81 => 13,  79 => 12,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
                <h3>AJOUTER UNE ENTREPRISE</h3><hr style=\"border: 1px solid darkgray;\">
            </div>
            <div class=\"row\" id=\"head_row\">
                <h5>INTERFACE DE CREATION D'UNE NOUVELLE ENTREPRISE:</h5>
            </div>
            <!-- BEGIN FORM -->
            <div class=\"row\" id=\"form_row\">
                <!-- BEGIN FORM-->
                {{ form_start(form, {'class': 'horizontal-form'}) }}
                <div class=\"form-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"col-md-6\" style=\"margin: 0;padding: 0 10px 0 0;\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Client</label>
                                    {{ form_errors(form.denomination)}}
                                    {{ form_widget(form.denomination, { 'attr': {'class': 'form-control'}} ) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-9\" style=\"margin: 0;padding: 0 0 0 10px;\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">Adresse</label>
                                {{ form_errors(form.adresse)}}
                                {{ form_widget(form.adresse, { 'attr': {'class': 'form-control'}} ) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <!--/span-->
                        <div class=\"col-md-6\">
                            <div class=\"col-md-6\" style=\"margin: 0;padding: 0 10px 0 0;\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Ville</label>
                                    {{ form_errors(form.ville)}}
                                    {{ form_widget(form.ville, { 'attr': {'class': 'form-control'}} ) }}
                                </div>
                            </div>
                            <div class=\"col-md-6\" style=\"margin: 0;padding: 0 0 0 10px;\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Département</label>
                                    {{ form_errors(form.departement)}}
                                    {{ form_widget(form.departement, { 'attr': {'class': 'form-control js-datepicker'}} ) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"col-md-6\" style=\"margin: 0; padding: 0 0 0 10px;\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Pays</label>
                                    {{ form_errors(form.pays)}}
                                    {{ form_widget(form.pays, { 'attr': {'class': 'form-control'}} ) }}
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <!--/row-->
                    <div class=\"row\">
                        <!--/span-->
                        <div class=\"col-md-6\">
                            <div class=\"col-md-6\" style=\"margin: 0;padding: 0 10px 0 0;\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Nom du contact</label>
                                    {{ form_errors(form.nomContact)}}
                                    {{ form_widget(form.nomContact, { 'attr': {'class': 'form-control'}} ) }}
                                </div>
                            </div>
                            <div class=\"col-md-6\" style=\"margin: 0;padding: 0 0 0 10px;\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Fonction du contact</label>
                                    {{ form_errors(form.fonctionContact)}}
                                    {{ form_widget(form.fonctionContact, { 'attr': {'class': 'form-control js-datepicker'}} ) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"col-md-6\" style=\"margin: 0; padding: 0 0 0 10px;\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Téléphone</label>
                                    {{ form_errors(form.telephone)}}
                                    {{ form_widget(form.telephone, { 'attr': {'class': 'form-control'}} ) }}
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <!--/row-->
                    <div class=\"row\">
                        <!--/span-->
                        <div class=\"col-md-6\">
                            <div class=\"col-md-6\" style=\"margin: 0;padding: 0 10px 0 0;\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Charge RH</label>
                                    {{ form_errors(form.chargeRecrutement)}}
                                    {{ form_widget(form.chargeRecrutement, { 'attr': {'class': 'form-control'}} ) }}
                                </div>
                            </div>
                            <div class=\"col-md-6\" style=\"margin: 0;padding: 0 0 0 10px;\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Etat</label>
                                    {{ form_errors(form.etat)}}
                                    {{ form_widget(form.etat, { 'attr': {'class': 'form-control js-datepicker'}} ) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"col-md-6\" style=\"margin: 0; padding: 0 0 0 10px;\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Profil</label>
                                    {{ form_errors(form.typeClient)}}
                                    {{ form_widget(form.typeClient, { 'attr': {'class': 'form-control'}} ) }}
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-9\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">Commentaires</label>
                                {{ form_errors(form.commentaire)}}
                                {{ form_widget(form.commentaire, { 'attr': {'class': 'form-control'}} ) }}
                            </div>
                        </div>
                    </div>
                {{ form_end(form) }}
            </div>
                <!-- END FORM-->
        </div>
    </div>

{% endblock %}


{% block javascripts %}
{% endblock %}", "@MALrm/Client/new_s.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle\\Resources\\views\\Client\\new_s.html.twig");
    }
}
