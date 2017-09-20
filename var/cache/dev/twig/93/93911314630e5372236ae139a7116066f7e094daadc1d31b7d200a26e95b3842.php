<?php

/* MALrmBundle:Client:new.html.twig */
class __TwigTemplate_bbf35f380ccc6ba1c6b5dd860083447024e8bca89b1e3bf82abffbb53b82a833 extends Twig_Template
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
        $__internal_1f88ccca3355d79d01a6c5a54a393ea5786b16ca27e049da153da48cee9a5ca9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f88ccca3355d79d01a6c5a54a393ea5786b16ca27e049da153da48cee9a5ca9->enter($__internal_1f88ccca3355d79d01a6c5a54a393ea5786b16ca27e049da153da48cee9a5ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Client:new.html.twig"));

        $__internal_f29064f7f78ac0be47a9d945020b3e2fda37b7f0b90896b5d47e7fee9f8eca11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f29064f7f78ac0be47a9d945020b3e2fda37b7f0b90896b5d47e7fee9f8eca11->enter($__internal_f29064f7f78ac0be47a9d945020b3e2fda37b7f0b90896b5d47e7fee9f8eca11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Client:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f88ccca3355d79d01a6c5a54a393ea5786b16ca27e049da153da48cee9a5ca9->leave($__internal_1f88ccca3355d79d01a6c5a54a393ea5786b16ca27e049da153da48cee9a5ca9_prof);

        
        $__internal_f29064f7f78ac0be47a9d945020b3e2fda37b7f0b90896b5d47e7fee9f8eca11->leave($__internal_f29064f7f78ac0be47a9d945020b3e2fda37b7f0b90896b5d47e7fee9f8eca11_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_014b25d99702dbca2c66678206d09e729a7d11673fa427d783864c5ee742961d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_014b25d99702dbca2c66678206d09e729a7d11673fa427d783864c5ee742961d->enter($__internal_014b25d99702dbca2c66678206d09e729a7d11673fa427d783864c5ee742961d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_78829edf692afacbf668d7073eb2c3d551ba50ee0f9b443c739dde07d931d1ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78829edf692afacbf668d7073eb2c3d551ba50ee0f9b443c739dde07d931d1ad->enter($__internal_78829edf692afacbf668d7073eb2c3d551ba50ee0f9b443c739dde07d931d1ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_78829edf692afacbf668d7073eb2c3d551ba50ee0f9b443c739dde07d931d1ad->leave($__internal_78829edf692afacbf668d7073eb2c3d551ba50ee0f9b443c739dde07d931d1ad_prof);

        
        $__internal_014b25d99702dbca2c66678206d09e729a7d11673fa427d783864c5ee742961d->leave($__internal_014b25d99702dbca2c66678206d09e729a7d11673fa427d783864c5ee742961d_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2248971c36e32cc83f85a150c654a6733990fe93b03e9c105c61fd17b890d44f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2248971c36e32cc83f85a150c654a6733990fe93b03e9c105c61fd17b890d44f->enter($__internal_2248971c36e32cc83f85a150c654a6733990fe93b03e9c105c61fd17b890d44f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_723c862824cffb03194a512ab8c59bc6ab6f1e94e37aa1e170574f57fff1e039 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_723c862824cffb03194a512ab8c59bc6ab6f1e94e37aa1e170574f57fff1e039->enter($__internal_723c862824cffb03194a512ab8c59bc6ab6f1e94e37aa1e170574f57fff1e039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ville.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_723c862824cffb03194a512ab8c59bc6ab6f1e94e37aa1e170574f57fff1e039->leave($__internal_723c862824cffb03194a512ab8c59bc6ab6f1e94e37aa1e170574f57fff1e039_prof);

        
        $__internal_2248971c36e32cc83f85a150c654a6733990fe93b03e9c105c61fd17b890d44f->leave($__internal_2248971c36e32cc83f85a150c654a6733990fe93b03e9c105c61fd17b890d44f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1432769bcbd630aac2f3eb0b7a821b72817115f2ea632f67ed340b76db643955 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1432769bcbd630aac2f3eb0b7a821b72817115f2ea632f67ed340b76db643955->enter($__internal_1432769bcbd630aac2f3eb0b7a821b72817115f2ea632f67ed340b76db643955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4aaed29a90e43f5892874f8de04933c6c6fa7d3fc8ca7519719a9d491a75c29e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aaed29a90e43f5892874f8de04933c6c6fa7d3fc8ca7519719a9d491a75c29e->enter($__internal_4aaed29a90e43f5892874f8de04933c6c6fa7d3fc8ca7519719a9d491a75c29e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("navbar.html.twig", "MALrmBundle:Client:new.html.twig", 27)->display($context);
        // line 28
        echo "    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    ";
        // line 30
        $this->loadTemplate("sidebar.html.twig", "MALrmBundle:Client:new.html.twig", 30)->display($context);
        // line 31
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
        // line 44
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("class" => "horizontal-form"));
        echo "
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Client <span class=\"star\">*</span></label>
                            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "denomination", array()), 'errors');
        echo "
                            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "denomination", array()), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Utilisateur <span class=\"star\">*</span></label>
                            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "chargeRecrutement", array()), 'errors');
        echo "
                            ";
        // line 57
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
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'errors');
        echo "
                            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Code Postal <span class=\"star\">*</span></label>
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
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Ville <span class=\"star\">*</span></label>
                            ";
        // line 81
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'errors');
        echo "
                            ";
        // line 82
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Département <span class=\"star\">*</span></label>
                            ";
        // line 88
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departement", array()), 'errors');
        echo "
                            ";
        // line 89
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
        // line 97
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'errors');
        echo "
                            ";
        // line 98
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Téléphone <span class=\"star\">*</span></label>
                            ";
        // line 104
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'errors');
        echo "
                            ";
        // line 105
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
        // line 115
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "civilite", array()), 'errors');
        echo "
                            ";
        // line 116
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "civilite", array()), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"col-lg-5\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Nom</label>
                            ";
        // line 122
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomContact", array()), 'errors');
        echo "
                            ";
        // line 123
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomContact", array()), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Prénom</label>
                            ";
        // line 129
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenomContact", array()), 'errors');
        echo "
                            ";
        // line 130
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
        // line 139
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fonctionContact", array()), 'errors');
        echo "
                            ";
        // line 140
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fonctionContact", array()), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"col-lg-7\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Email <span class=\"star\">*</span></label>
                            ";
        // line 146
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                            ";
        // line 147
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
        // line 155
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeClient", array()), 'errors');
        echo "
                            ";
        // line 156
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeClient", array()), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Etat <span class=\"star\">*</span></label>
                            ";
        // line 162
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "etat", array()), 'errors');
        echo "
                            ";
        // line 163
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
        // line 171
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "partenaire", array()), 'errors');
        echo "
                            ";
        // line 172
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
        // line 180
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'errors');
        echo "
                            ";
        // line 181
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
        // line 190
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                <!-- END FORM-->
            </div>
        </div>
    </div>

";
        
        $__internal_4aaed29a90e43f5892874f8de04933c6c6fa7d3fc8ca7519719a9d491a75c29e->leave($__internal_4aaed29a90e43f5892874f8de04933c6c6fa7d3fc8ca7519719a9d491a75c29e_prof);

        
        $__internal_1432769bcbd630aac2f3eb0b7a821b72817115f2ea632f67ed340b76db643955->leave($__internal_1432769bcbd630aac2f3eb0b7a821b72817115f2ea632f67ed340b76db643955_prof);

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
        return array (  400 => 190,  388 => 181,  384 => 180,  373 => 172,  369 => 171,  358 => 163,  354 => 162,  345 => 156,  341 => 155,  330 => 147,  326 => 146,  317 => 140,  313 => 139,  301 => 130,  297 => 129,  288 => 123,  284 => 122,  275 => 116,  271 => 115,  258 => 105,  254 => 104,  245 => 98,  241 => 97,  230 => 89,  226 => 88,  217 => 82,  213 => 81,  202 => 73,  198 => 72,  189 => 66,  185 => 65,  174 => 57,  170 => 56,  161 => 50,  157 => 49,  149 => 44,  134 => 31,  132 => 30,  128 => 28,  126 => 27,  118 => 22,  115 => 21,  109 => 19,  103 => 17,  101 => 16,  95 => 12,  86 => 11,  73 => 7,  64 => 6,  51 => 4,  42 => 3,  11 => 1,);
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
