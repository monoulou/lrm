<?php

/* MALrmBundle:Candidat:new.html.twig */
class __TwigTemplate_ee2db69eace38c64c64b46aeb3d3d4268e36d2c7ae5d45e66a94c18146f93a56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MALrmBundle:Candidat:new.html.twig", 1);
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
        $__internal_61b4a0fd06a8447357b3d2a244077de5606776d7d3baeb6ef11a9da20510b377 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61b4a0fd06a8447357b3d2a244077de5606776d7d3baeb6ef11a9da20510b377->enter($__internal_61b4a0fd06a8447357b3d2a244077de5606776d7d3baeb6ef11a9da20510b377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Candidat:new.html.twig"));

        $__internal_4db8c06b851fba66490f7c0cdfeacb45ce5043d1b5d7d98e3a936221af8de93c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4db8c06b851fba66490f7c0cdfeacb45ce5043d1b5d7d98e3a936221af8de93c->enter($__internal_4db8c06b851fba66490f7c0cdfeacb45ce5043d1b5d7d98e3a936221af8de93c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Candidat:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61b4a0fd06a8447357b3d2a244077de5606776d7d3baeb6ef11a9da20510b377->leave($__internal_61b4a0fd06a8447357b3d2a244077de5606776d7d3baeb6ef11a9da20510b377_prof);

        
        $__internal_4db8c06b851fba66490f7c0cdfeacb45ce5043d1b5d7d98e3a936221af8de93c->leave($__internal_4db8c06b851fba66490f7c0cdfeacb45ce5043d1b5d7d98e3a936221af8de93c_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_46c2d1dbd72276fdd70bad69c8ea3314e8e95dc41a39215b5900465d244bff9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46c2d1dbd72276fdd70bad69c8ea3314e8e95dc41a39215b5900465d244bff9c->enter($__internal_46c2d1dbd72276fdd70bad69c8ea3314e8e95dc41a39215b5900465d244bff9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_80d9e60433fb27880e050ea04d5b319ada627b19190985d6df58071ac109b0c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80d9e60433fb27880e050ea04d5b319ada627b19190985d6df58071ac109b0c5->enter($__internal_80d9e60433fb27880e050ea04d5b319ada627b19190985d6df58071ac109b0c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_80d9e60433fb27880e050ea04d5b319ada627b19190985d6df58071ac109b0c5->leave($__internal_80d9e60433fb27880e050ea04d5b319ada627b19190985d6df58071ac109b0c5_prof);

        
        $__internal_46c2d1dbd72276fdd70bad69c8ea3314e8e95dc41a39215b5900465d244bff9c->leave($__internal_46c2d1dbd72276fdd70bad69c8ea3314e8e95dc41a39215b5900465d244bff9c_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c241ca6ec858e6137d66bc15d9a0b093476efcf13fbcc501674c3b71b2d83bb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c241ca6ec858e6137d66bc15d9a0b093476efcf13fbcc501674c3b71b2d83bb4->enter($__internal_c241ca6ec858e6137d66bc15d9a0b093476efcf13fbcc501674c3b71b2d83bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_024dc1ddbca4efeca8140df1933bad8ba23f0169ba60514f206ca307ca8c4011 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_024dc1ddbca4efeca8140df1933bad8ba23f0169ba60514f206ca307ca8c4011->enter($__internal_024dc1ddbca4efeca8140df1933bad8ba23f0169ba60514f206ca307ca8c4011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ville.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_024dc1ddbca4efeca8140df1933bad8ba23f0169ba60514f206ca307ca8c4011->leave($__internal_024dc1ddbca4efeca8140df1933bad8ba23f0169ba60514f206ca307ca8c4011_prof);

        
        $__internal_c241ca6ec858e6137d66bc15d9a0b093476efcf13fbcc501674c3b71b2d83bb4->leave($__internal_c241ca6ec858e6137d66bc15d9a0b093476efcf13fbcc501674c3b71b2d83bb4_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_71288323319783d16699c3b316d3cb7cdd5d58acf512b4ff049819f87b3dbbfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71288323319783d16699c3b316d3cb7cdd5d58acf512b4ff049819f87b3dbbfc->enter($__internal_71288323319783d16699c3b316d3cb7cdd5d58acf512b4ff049819f87b3dbbfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b374ffd6a738cc4dccca460e9948334f377a0b66038c28bf268e9cc1937289cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b374ffd6a738cc4dccca460e9948334f377a0b66038c28bf268e9cc1937289cf->enter($__internal_b374ffd6a738cc4dccca460e9948334f377a0b66038c28bf268e9cc1937289cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "
    <div class=\"container-fluid\" id=\"header_container\">
        <div class=\"row\">
            <div class=\"col-lg-offset-10\">
                ";
        // line 17
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 18
            echo "                    <i class=\"material-icons\">person</i> Bonjour, ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "--<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
                ";
        } else {
            // line 20
            echo "                    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
                ";
        }
        // line 22
        echo "            </div>
        </div>
    </div>
    <div class=\"container-fluid\" id=\"main_container\">
    <!-- START TOP NAVBAR-->
    ";
        // line 27
        $this->loadTemplate("navbar.html.twig", "MALrmBundle:Candidat:new.html.twig", 27)->display($context);
        // line 28
        echo "    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    ";
        // line 30
        $this->loadTemplate("sidebar.html.twig", "MALrmBundle:Candidat:new.html.twig", 30)->display($context);
        // line 31
        echo "    <!-- END SIDEBAR-->

            <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
                <div class=\"row\">
                    <h3>AJOUTER UN CANDIDAT</h3><hr style=\"border: 1px solid darkgray;\">
                </div>
                <div class=\"row\" id=\"head_row\">
                    <h5>INTERFACE DE CREATION D'UNE NOUVEAU CANDIDAT:</h5>
                </div>
                <!-- BEGIN FORM -->
                <div class=\"row\" id=\"form_row\">
                    <!-- BEGIN FORM-->
                    ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("class" => "horizontal-form"));
        echo "
                    <div class=\"row\">
                        <div class=\"col-lg-3\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">Chargé RH</label>
                                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "chargeRecrutement", array()), 'errors');
        echo "
                                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "chargeRecrutement", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-3\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">Offre d'emploi:</label>
                                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "emploi", array()), 'errors');
        echo "
                                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "emploi", array()), 'widget');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-2\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">Civilité:</label>
                                ";
        // line 64
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "civilite", array()), 'errors');
        echo "
                                ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "civilite", array()), 'widget');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-3\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">Nom</label>
                                ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
                                ";
        // line 74
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-2\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">Prénom:</label>
                                ";
        // line 80
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'errors');
        echo "
                                ";
        // line 81
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-5\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">Adresse:</label>
                                ";
        // line 89
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'errors');
        echo "
                                ";
        // line 90
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-2\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">Code Postal</label>
                                ";
        // line 98
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "villeCodePostal", array()), 'errors');
        echo "
                                ";
        // line 99
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "villeCodePostal", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-3\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">Ville</label>
                                ";
        // line 105
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'errors');
        echo "
                                ";
        // line 106
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'widget');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-3\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">Département</label>
                                ";
        // line 114
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departement", array()), 'errors');
        echo "
                                ";
        // line 115
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departement", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-3\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">Pays</label>
                                ";
        // line 121
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'errors');
        echo "
                                ";
        // line 122
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'widget');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-2\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">Date de naissance:</label>
                                ";
        // line 131
        echo "                                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateAnniversaire", array()), 'errors');
        echo "
                                ";
        // line 132
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateAnniversaire", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-1\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">Age:</label>
                                ";
        // line 139
        echo "                                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "age", array()), 'errors');
        echo "
                                ";
        // line 140
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "age", array()), 'widget');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-2\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">Téléphone</label>
                                ";
        // line 148
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'errors');
        echo "
                                ";
        // line 149
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-4\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">Email</label>
                                ";
        // line 155
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                                ";
        // line 156
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-3\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">Test de personnalité:</label>
                                ";
        // line 164
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "testPersonnalite", array()), 'errors');
        echo "
                                ";
        // line 165
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "testPersonnalite", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"col-lg-2\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">Date de relance:</label>
                                ";
        // line 171
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateRelance", array()), 'errors');
        echo "
                                ";
        // line 172
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateRelance", array()), 'widget');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-3\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">cv<em>(format pdf ou .doc):</em></label>
                                ";
        // line 180
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cvCandidat", array()), 'errors');
        echo "
                                ";
        // line 181
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cvCandidat", array()), 'widget');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">Commentaires</label>
                                ";
        // line 189
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'errors');
        echo "
                                ";
        // line 190
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'widget');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-offset-5\">
                            <button type=\"submit\" class=\"btn  btn-default\"><i class=\"fa fa-check\"></i>Enregister</button>
                        </div>
                    </div>
                    ";
        // line 199
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                    <!-- END FORM-->
                </div>
            </div>




";
        
        $__internal_b374ffd6a738cc4dccca460e9948334f377a0b66038c28bf268e9cc1937289cf->leave($__internal_b374ffd6a738cc4dccca460e9948334f377a0b66038c28bf268e9cc1937289cf_prof);

        
        $__internal_71288323319783d16699c3b316d3cb7cdd5d58acf512b4ff049819f87b3dbbfc->leave($__internal_71288323319783d16699c3b316d3cb7cdd5d58acf512b4ff049819f87b3dbbfc_prof);

    }

    public function getTemplateName()
    {
        return "MALrmBundle:Candidat:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  417 => 199,  405 => 190,  401 => 189,  390 => 181,  386 => 180,  375 => 172,  371 => 171,  362 => 165,  358 => 164,  347 => 156,  343 => 155,  334 => 149,  330 => 148,  319 => 140,  314 => 139,  305 => 132,  300 => 131,  289 => 122,  285 => 121,  276 => 115,  272 => 114,  261 => 106,  257 => 105,  248 => 99,  244 => 98,  233 => 90,  229 => 89,  218 => 81,  214 => 80,  205 => 74,  201 => 73,  190 => 65,  186 => 64,  175 => 56,  171 => 55,  162 => 49,  158 => 48,  150 => 43,  136 => 31,  134 => 30,  130 => 28,  128 => 27,  121 => 22,  115 => 20,  107 => 18,  105 => 17,  99 => 13,  90 => 12,  78 => 8,  73 => 7,  64 => 6,  51 => 4,  42 => 3,  11 => 1,);
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
                    <h3>AJOUTER UN CANDIDAT</h3><hr style=\"border: 1px solid darkgray;\">
                </div>
                <div class=\"row\" id=\"head_row\">
                    <h5>INTERFACE DE CREATION D'UNE NOUVEAU CANDIDAT:</h5>
                </div>
                <!-- BEGIN FORM -->
                <div class=\"row\" id=\"form_row\">
                    <!-- BEGIN FORM-->
                    {{ form_start(form, {'class': 'horizontal-form'}) }}
                    <div class=\"row\">
                        <div class=\"col-lg-3\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">Chargé RH</label>
                                {{ form_errors(form.chargeRecrutement)}}
                                {{ form_widget(form.chargeRecrutement)}}
                            </div>
                        </div>
                        <div class=\"col-lg-3\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">Offre d'emploi:</label>
                                {{ form_errors(form.emploi)}}
                                {{ form_widget(form.emploi)}}
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-2\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">Civilité:</label>
                                {{ form_errors(form.civilite) }}
                                {{ form_widget(form.civilite) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-3\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">Nom</label>
                                {{ form_errors(form.nom) }}
                                {{ form_widget(form.nom) }}
                            </div>
                        </div>
                        <div class=\"col-lg-2\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">Prénom:</label>
                                {{ form_errors(form.prenom) }}
                                {{ form_widget(form.prenom) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-5\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">Adresse:</label>
                                {{ form_errors(form.adresse) }}
                                {{ form_widget(form.adresse) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-2\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">Code Postal</label>
                                {{ form_errors(form.villeCodePostal)}}
                                {{ form_widget(form.villeCodePostal) }}
                            </div>
                        </div>
                        <div class=\"col-lg-3\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">Ville</label>
                                {{ form_errors(form.ville)}}
                                {{ form_widget(form.ville) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-3\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">Département</label>
                                {{ form_errors(form.departement)}}
                                {{ form_widget(form.departement) }}
                            </div>
                        </div>
                        <div class=\"col-lg-3\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">Pays</label>
                                {{ form_errors(form.pays)}}
                                {{ form_widget(form.pays) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-2\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">Date de naissance:</label>
                                {#<input  class=\"form-control\" type=\"text\" name=\"ma_lrmbundle_candidat[dateAnniversaire]\" id=\"ma_lrmbundle_candidat_dateAnniversaire\" />#}
                                {{ form_errors(form.dateAnniversaire) }}
                                {{ form_widget(form.dateAnniversaire) }}
                            </div>
                        </div>
                        <div class=\"col-lg-1\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">Age:</label>
                                {#<input  class=\"form-control\" type=\"text\" name=\"ma_lrmbundle_candidat[age]\" id=\"ma_lrmbundle_candidat_age\" />#}
                                {{ form_errors(form.age) }}
                                {{ form_widget(form.age) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-2\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">Téléphone</label>
                                {{ form_errors(form.telephone)}}
                                {{ form_widget(form.telephone) }}
                            </div>
                        </div>
                        <div class=\"col-lg-4\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">Email</label>
                                {{ form_errors(form.email)}}
                                {{ form_widget(form.email) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-3\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">Test de personnalité:</label>
                                {{ form_errors(form.testPersonnalite) }}
                                {{ form_widget(form.testPersonnalite) }}
                            </div>
                        </div>
                        <div class=\"col-lg-2\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">Date de relance:</label>
                                {{ form_errors(form.dateRelance) }}
                                {{ form_widget(form.dateRelance) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-3\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">cv<em>(format pdf ou .doc):</em></label>
                                {{ form_errors(form.cvCandidat) }}
                                {{ form_widget(form.cvCandidat) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">Commentaires</label>
                                {{ form_errors(form.commentaire)}}
                                {{ form_widget(form.commentaire) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-lg-offset-5\">
                            <button type=\"submit\" class=\"btn  btn-default\"><i class=\"fa fa-check\"></i>Enregister</button>
                        </div>
                    </div>
                    {{ form_end(form) }}
                    <!-- END FORM-->
                </div>
            </div>




{% endblock %}", "MALrmBundle:Candidat:new.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle/Resources/views/Candidat/new.html.twig");
    }
}