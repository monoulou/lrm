<?php

/* MALrmBundle:Client:new.html.twig */
class __TwigTemplate_d0d3a387ac90efc26e9d7d3e93206f89a154bcceffd7dea47f51050c79671660 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MALrmBundle:Client:new.html.twig", 1);
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
        $__internal_733f98f1910385865a0f08d8d23de20aea377895773ca25781568edbbea6f505 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_733f98f1910385865a0f08d8d23de20aea377895773ca25781568edbbea6f505->enter($__internal_733f98f1910385865a0f08d8d23de20aea377895773ca25781568edbbea6f505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Client:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_733f98f1910385865a0f08d8d23de20aea377895773ca25781568edbbea6f505->leave($__internal_733f98f1910385865a0f08d8d23de20aea377895773ca25781568edbbea6f505_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1f9425beb7cf51bbe239233f49abb57ca3ba757fd1b725312c9bda9f3510a8fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f9425beb7cf51bbe239233f49abb57ca3ba757fd1b725312c9bda9f3510a8fb->enter($__internal_1f9425beb7cf51bbe239233f49abb57ca3ba757fd1b725312c9bda9f3510a8fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_1f9425beb7cf51bbe239233f49abb57ca3ba757fd1b725312c9bda9f3510a8fb->leave($__internal_1f9425beb7cf51bbe239233f49abb57ca3ba757fd1b725312c9bda9f3510a8fb_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_48d3af68b890fb05b75b8afc55be94d8f220c2608eca9777a8c692990077dd6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48d3af68b890fb05b75b8afc55be94d8f220c2608eca9777a8c692990077dd6b->enter($__internal_48d3af68b890fb05b75b8afc55be94d8f220c2608eca9777a8c692990077dd6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ville.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_48d3af68b890fb05b75b8afc55be94d8f220c2608eca9777a8c692990077dd6b->leave($__internal_48d3af68b890fb05b75b8afc55be94d8f220c2608eca9777a8c692990077dd6b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a0eff83da053acab40a43613d50f67a85ce90e3d2bb8668eb1ad262958cd237 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a0eff83da053acab40a43613d50f67a85ce90e3d2bb8668eb1ad262958cd237->enter($__internal_4a0eff83da053acab40a43613d50f67a85ce90e3d2bb8668eb1ad262958cd237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
    <div class=\"container-fluid\" id=\"header_container\">
        <div class=\"row\">
            <div class=\"col-lg-offset-10\">
                ";
        // line 16
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 17
            echo "                    <i class=\"material-icons\">person</i> Bonjour, ";
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
        $this->loadTemplate("navbar.html.twig", "MALrmBundle:Client:new.html.twig", 26)->display($context);
        // line 27
        echo "    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    ";
        // line 29
        $this->loadTemplate("sidebar.html.twig", "MALrmBundle:Client:new.html.twig", 29)->display($context);
        // line 30
        echo "    <!-- END SIDEBAR-->

    <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
        <div class=\"row\">
            <h3>AJOUTER UNE ENTREPRISE</h3><hr style=\"border: 1px solid darkgray;\">
        </div>
        <div class=\"row\" id=\"head_row\">
            <h5>INTERFACE DE CREATION D'UNE NOUVELLE ENTREPRISE:</h5>
        </div>
        <!-- BEGIN FORM -->
        <div class=\"row\" id=\"form_row\">
            <div class=\"col-lg-6\" id=\"block_left_client\">
                <!-- BEGIN FORM-->
                ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("class" => "horizontal-form"));
        echo "
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Client <span class=\"star\">*</span></label>
                            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "denomination", array()), 'errors');
        echo "
                            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "denomination", array()), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Utilisateur <span class=\"star\">*</span></label>
                            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "chargeRecrutement", array()), 'errors');
        echo "
                            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "chargeRecrutement", array()), 'widget');
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-8\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Adresse <span class=\"star\">*</span></label>
                            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'errors');
        echo "
                            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Code Postal <span class=\"star\">*</span></label>
                            ";
        // line 71
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "villeCodePostal", array()), 'errors');
        echo "
                            ";
        // line 72
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "villeCodePostal", array()), 'widget');
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Ville <span class=\"star\">*</span></label>
                            ";
        // line 80
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'errors');
        echo "
                            ";
        // line 81
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Département <span class=\"star\">*</span></label>
                            ";
        // line 87
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departement", array()), 'errors');
        echo "
                            ";
        // line 88
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departement", array()), 'widget');
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Pays <span class=\"star\">*</span></label>
                            ";
        // line 96
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'errors');
        echo "
                            ";
        // line 97
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Téléphone <span class=\"star\">*</span></label>
                            ";
        // line 103
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'errors');
        echo "
                            ";
        // line 104
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'widget');
        echo "
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6\" id=\"block_right_client\">
                <div class=\"row\">
                    <div class=\"col-lg-3\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Civilite</label>
                            ";
        // line 114
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "civilite", array()), 'errors');
        echo "
                            ";
        // line 115
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "civilite", array()), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"col-lg-5\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Nom</label>
                            ";
        // line 121
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomContact", array()), 'errors');
        echo "
                            ";
        // line 122
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomContact", array()), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Prénom</label>
                            ";
        // line 128
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenomContact", array()), 'errors');
        echo "
                            ";
        // line 129
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenomContact", array()), 'widget');
        echo "
                        </div>
                    </div>

                </div>
                <div class=\"row\">
                    <div class=\"col-lg-5\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Fonction du Contact</label>
                            ";
        // line 138
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fonctionContact", array()), 'errors');
        echo "
                            ";
        // line 139
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fonctionContact", array()), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"col-lg-7\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Email <span class=\"star\">*</span></label>
                            ";
        // line 145
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                            ";
        // line 146
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-4\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Type <span class=\"star\">*</span></label>
                            ";
        // line 154
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeClient", array()), 'errors');
        echo "
                            ";
        // line 155
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeClient", array()), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Etat <span class=\"star\">*</span></label>
                            ";
        // line 161
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "etat", array()), 'errors');
        echo "
                            ";
        // line 162
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "etat", array()), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"form-group\">
                            <div class=\"partenaire\">
                                <label class=\"control-label\">Partenaire <span class=\"star\">*</span></label>
                            </div>
                            ";
        // line 170
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "partenaire", array()), 'errors');
        echo "
                            ";
        // line 171
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "partenaire", array()), 'widget');
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Commentaires</label>
                            ";
        // line 179
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'errors');
        echo "
                            ";
        // line 180
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'widget');
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-offset-7 col-lg-5\">
                        <button type=\"submit\" style=\"width: 100%\" class=\"btn  btn-default\"><i class=\"fa fa-check\"></i>Enregister</button>
                    </div>
                </div>
                ";
        // line 189
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                <!-- END FORM-->
            </div>
        </div>
    </div>

";
        
        $__internal_4a0eff83da053acab40a43613d50f67a85ce90e3d2bb8668eb1ad262958cd237->leave($__internal_4a0eff83da053acab40a43613d50f67a85ce90e3d2bb8668eb1ad262958cd237_prof);

    }

    public function getTemplateName()
    {
        return "MALrmBundle:Client:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  377 => 189,  365 => 180,  361 => 179,  350 => 171,  346 => 170,  335 => 162,  331 => 161,  322 => 155,  318 => 154,  307 => 146,  303 => 145,  294 => 139,  290 => 138,  278 => 129,  274 => 128,  265 => 122,  261 => 121,  252 => 115,  248 => 114,  235 => 104,  231 => 103,  222 => 97,  218 => 96,  207 => 88,  203 => 87,  194 => 81,  190 => 80,  179 => 72,  175 => 71,  166 => 65,  162 => 64,  151 => 56,  147 => 55,  138 => 49,  134 => 48,  126 => 43,  111 => 30,  109 => 29,  105 => 27,  103 => 26,  96 => 21,  90 => 19,  82 => 17,  80 => 16,  74 => 12,  68 => 11,  58 => 7,  52 => 6,  42 => 4,  36 => 3,  11 => 1,);
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
            <h3>AJOUTER UNE ENTREPRISE</h3><hr style=\"border: 1px solid darkgray;\">
        </div>
        <div class=\"row\" id=\"head_row\">
            <h5>INTERFACE DE CREATION D'UNE NOUVELLE ENTREPRISE:</h5>
        </div>
        <!-- BEGIN FORM -->
        <div class=\"row\" id=\"form_row\">
            <div class=\"col-lg-6\" id=\"block_left_client\">
                <!-- BEGIN FORM-->
                {{ form_start(form, {'class': 'horizontal-form'}) }}
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Client <span class=\"star\">*</span></label>
                            {{ form_errors(form.denomination) }}
                            {{ form_widget(form.denomination) }}
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Utilisateur <span class=\"star\">*</span></label>
                            {{ form_errors(form.chargeRecrutement)}}
                            {{ form_widget(form.chargeRecrutement)}}
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-8\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Adresse <span class=\"star\">*</span></label>
                            {{ form_errors(form.adresse) }}
                            {{ form_widget(form.adresse) }}
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Code Postal <span class=\"star\">*</span></label>
                            {{ form_errors(form.villeCodePostal)}}
                            {{ form_widget(form.villeCodePostal) }}
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Ville <span class=\"star\">*</span></label>
                            {{ form_errors(form.ville)}}
                            {{ form_widget(form.ville) }}
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Département <span class=\"star\">*</span></label>
                            {{ form_errors(form.departement)}}
                            {{ form_widget(form.departement) }}
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Pays <span class=\"star\">*</span></label>
                            {{ form_errors(form.pays)}}
                            {{ form_widget(form.pays) }}
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Téléphone <span class=\"star\">*</span></label>
                            {{ form_errors(form.telephone)}}
                            {{ form_widget(form.telephone) }}
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6\" id=\"block_right_client\">
                <div class=\"row\">
                    <div class=\"col-lg-3\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Civilite</label>
                            {{ form_errors(form.civilite)}}
                            {{ form_widget(form.civilite) }}
                        </div>
                    </div>
                    <div class=\"col-lg-5\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Nom</label>
                            {{ form_errors(form.nomContact)}}
                            {{ form_widget(form.nomContact) }}
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Prénom</label>
                            {{ form_errors(form.prenomContact)}}
                            {{ form_widget(form.prenomContact) }}
                        </div>
                    </div>

                </div>
                <div class=\"row\">
                    <div class=\"col-lg-5\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Fonction du Contact</label>
                            {{ form_errors(form.fonctionContact)}}
                            {{ form_widget(form.fonctionContact) }}
                        </div>
                    </div>
                    <div class=\"col-lg-7\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Email <span class=\"star\">*</span></label>
                            {{ form_errors(form.email)}}
                            {{ form_widget(form.email) }}
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-4\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Type <span class=\"star\">*</span></label>
                            {{ form_errors(form.typeClient)}}
                            {{ form_widget(form.typeClient ) }}
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Etat <span class=\"star\">*</span></label>
                            {{ form_errors(form.etat)}}
                            {{ form_widget(form.etat) }}
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"form-group\">
                            <div class=\"partenaire\">
                                <label class=\"control-label\">Partenaire <span class=\"star\">*</span></label>
                            </div>
                            {{ form_errors(form.partenaire)}}
                            {{ form_widget(form.partenaire) }}
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Commentaires</label>
                            {{ form_errors(form.commentaire)}}
                            {{ form_widget(form.commentaire) }}
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-offset-7 col-lg-5\">
                        <button type=\"submit\" style=\"width: 100%\" class=\"btn  btn-default\"><i class=\"fa fa-check\"></i>Enregister</button>
                    </div>
                </div>
                {{ form_end(form) }}
                <!-- END FORM-->
            </div>
        </div>
    </div>

{% endblock %}", "MALrmBundle:Client:new.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle/Resources/views/Client/new.html.twig");
    }
}
