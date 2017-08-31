<?php

/* @MALrm/Candidat/new.html.twig */
class __TwigTemplate_64c4c236590b8947aa949dc1ab6e1d1d1f9d5dbea97e9830b465ba0263df8b59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@MALrm/Candidat/new.html.twig", 1);
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
        $__internal_d19353d453e9fa558ce8fa7a50e4ed747c97f2ffd148b1fcf37c543c10f579a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d19353d453e9fa558ce8fa7a50e4ed747c97f2ffd148b1fcf37c543c10f579a5->enter($__internal_d19353d453e9fa558ce8fa7a50e4ed747c97f2ffd148b1fcf37c543c10f579a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MALrm/Candidat/new.html.twig"));

        $__internal_4be528b562b8b9cf74b3b087329d6378f135250cffbefe4945cde77925274e6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4be528b562b8b9cf74b3b087329d6378f135250cffbefe4945cde77925274e6f->enter($__internal_4be528b562b8b9cf74b3b087329d6378f135250cffbefe4945cde77925274e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MALrm/Candidat/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d19353d453e9fa558ce8fa7a50e4ed747c97f2ffd148b1fcf37c543c10f579a5->leave($__internal_d19353d453e9fa558ce8fa7a50e4ed747c97f2ffd148b1fcf37c543c10f579a5_prof);

        
        $__internal_4be528b562b8b9cf74b3b087329d6378f135250cffbefe4945cde77925274e6f->leave($__internal_4be528b562b8b9cf74b3b087329d6378f135250cffbefe4945cde77925274e6f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3b406be1a8bbd5511e35520a2ce38fa886c407f52691b6527c221b998084342e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b406be1a8bbd5511e35520a2ce38fa886c407f52691b6527c221b998084342e->enter($__internal_3b406be1a8bbd5511e35520a2ce38fa886c407f52691b6527c221b998084342e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9fc8276a11cb1eb31c4bd222c5d755a13121612f32da755b86ffd0877d1444f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fc8276a11cb1eb31c4bd222c5d755a13121612f32da755b86ffd0877d1444f5->enter($__internal_9fc8276a11cb1eb31c4bd222c5d755a13121612f32da755b86ffd0877d1444f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_9fc8276a11cb1eb31c4bd222c5d755a13121612f32da755b86ffd0877d1444f5->leave($__internal_9fc8276a11cb1eb31c4bd222c5d755a13121612f32da755b86ffd0877d1444f5_prof);

        
        $__internal_3b406be1a8bbd5511e35520a2ce38fa886c407f52691b6527c221b998084342e->leave($__internal_3b406be1a8bbd5511e35520a2ce38fa886c407f52691b6527c221b998084342e_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0ea7dbd69c236a22b94e33b9cb6ee934b426ec45eee4deea8339b1115980a615 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ea7dbd69c236a22b94e33b9cb6ee934b426ec45eee4deea8339b1115980a615->enter($__internal_0ea7dbd69c236a22b94e33b9cb6ee934b426ec45eee4deea8339b1115980a615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5d446146b7d259686f77aa84d4a970f845bd68d4b9f40e282c248a3a7f80071f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d446146b7d259686f77aa84d4a970f845bd68d4b9f40e282c248a3a7f80071f->enter($__internal_5d446146b7d259686f77aa84d4a970f845bd68d4b9f40e282c248a3a7f80071f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ville.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_5d446146b7d259686f77aa84d4a970f845bd68d4b9f40e282c248a3a7f80071f->leave($__internal_5d446146b7d259686f77aa84d4a970f845bd68d4b9f40e282c248a3a7f80071f_prof);

        
        $__internal_0ea7dbd69c236a22b94e33b9cb6ee934b426ec45eee4deea8339b1115980a615->leave($__internal_0ea7dbd69c236a22b94e33b9cb6ee934b426ec45eee4deea8339b1115980a615_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_72cdbf27ba3d6c62020581772674e5a596f17f7a270b3ed8620bb81df450559d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72cdbf27ba3d6c62020581772674e5a596f17f7a270b3ed8620bb81df450559d->enter($__internal_72cdbf27ba3d6c62020581772674e5a596f17f7a270b3ed8620bb81df450559d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_64c92fe39a0a48302a1d778cd4c95958f3fb27ce5226212330dcce051a21dbc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64c92fe39a0a48302a1d778cd4c95958f3fb27ce5226212330dcce051a21dbc5->enter($__internal_64c92fe39a0a48302a1d778cd4c95958f3fb27ce5226212330dcce051a21dbc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("navbar.html.twig", "@MALrm/Candidat/new.html.twig", 27)->display($context);
        // line 28
        echo "    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    ";
        // line 30
        $this->loadTemplate("sidebar.html.twig", "@MALrm/Candidat/new.html.twig", 30)->display($context);
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
        
        $__internal_64c92fe39a0a48302a1d778cd4c95958f3fb27ce5226212330dcce051a21dbc5->leave($__internal_64c92fe39a0a48302a1d778cd4c95958f3fb27ce5226212330dcce051a21dbc5_prof);

        
        $__internal_72cdbf27ba3d6c62020581772674e5a596f17f7a270b3ed8620bb81df450559d->leave($__internal_72cdbf27ba3d6c62020581772674e5a596f17f7a270b3ed8620bb81df450559d_prof);

    }

    public function getTemplateName()
    {
        return "@MALrm/Candidat/new.html.twig";
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




{% endblock %}", "@MALrm/Candidat/new.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle\\Resources\\views\\Candidat\\new.html.twig");
    }
}
