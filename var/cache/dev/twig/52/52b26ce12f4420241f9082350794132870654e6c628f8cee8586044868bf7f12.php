<?php

/* MALrmBundle:Client:edit.html.twig */
class __TwigTemplate_63c2a09cf3c619cff2e4218c9b068f7bda2821c2feda9b69321fb2e7832b284d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MALrmBundle:Client:edit.html.twig", 1);
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
        $__internal_82b3d7031663dbefd615e5de213eb12092443d4f6cafc48fdd58542bf7bf7def = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82b3d7031663dbefd615e5de213eb12092443d4f6cafc48fdd58542bf7bf7def->enter($__internal_82b3d7031663dbefd615e5de213eb12092443d4f6cafc48fdd58542bf7bf7def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Client:edit.html.twig"));

        $__internal_6cdec5cc76bf186023fe04b0908d1ab25696f899708677437e0d0e74a799fdaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cdec5cc76bf186023fe04b0908d1ab25696f899708677437e0d0e74a799fdaa->enter($__internal_6cdec5cc76bf186023fe04b0908d1ab25696f899708677437e0d0e74a799fdaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Client:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82b3d7031663dbefd615e5de213eb12092443d4f6cafc48fdd58542bf7bf7def->leave($__internal_82b3d7031663dbefd615e5de213eb12092443d4f6cafc48fdd58542bf7bf7def_prof);

        
        $__internal_6cdec5cc76bf186023fe04b0908d1ab25696f899708677437e0d0e74a799fdaa->leave($__internal_6cdec5cc76bf186023fe04b0908d1ab25696f899708677437e0d0e74a799fdaa_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_84ff38241e451513b2a2cc4939aba3e2c144f236c62e42ec2bfc3562fbac2998 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84ff38241e451513b2a2cc4939aba3e2c144f236c62e42ec2bfc3562fbac2998->enter($__internal_84ff38241e451513b2a2cc4939aba3e2c144f236c62e42ec2bfc3562fbac2998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_49d307b4c5859c284d24508399b2c9aef82d02a42b5b7232a4fab2331d003fc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49d307b4c5859c284d24508399b2c9aef82d02a42b5b7232a4fab2331d003fc9->enter($__internal_49d307b4c5859c284d24508399b2c9aef82d02a42b5b7232a4fab2331d003fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_49d307b4c5859c284d24508399b2c9aef82d02a42b5b7232a4fab2331d003fc9->leave($__internal_49d307b4c5859c284d24508399b2c9aef82d02a42b5b7232a4fab2331d003fc9_prof);

        
        $__internal_84ff38241e451513b2a2cc4939aba3e2c144f236c62e42ec2bfc3562fbac2998->leave($__internal_84ff38241e451513b2a2cc4939aba3e2c144f236c62e42ec2bfc3562fbac2998_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ce0ac1b235d142615eeb7950cc36210f49f9c1856bb36d0050b8147a53286c2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce0ac1b235d142615eeb7950cc36210f49f9c1856bb36d0050b8147a53286c2d->enter($__internal_ce0ac1b235d142615eeb7950cc36210f49f9c1856bb36d0050b8147a53286c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e32940c77d5e72e3467fde31247ebc8e98491561ca6fd2b7c0c45f5e725e470b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e32940c77d5e72e3467fde31247ebc8e98491561ca6fd2b7c0c45f5e725e470b->enter($__internal_e32940c77d5e72e3467fde31247ebc8e98491561ca6fd2b7c0c45f5e725e470b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ville.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    ";
        
        $__internal_e32940c77d5e72e3467fde31247ebc8e98491561ca6fd2b7c0c45f5e725e470b->leave($__internal_e32940c77d5e72e3467fde31247ebc8e98491561ca6fd2b7c0c45f5e725e470b_prof);

        
        $__internal_ce0ac1b235d142615eeb7950cc36210f49f9c1856bb36d0050b8147a53286c2d->leave($__internal_ce0ac1b235d142615eeb7950cc36210f49f9c1856bb36d0050b8147a53286c2d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8fadde899bc7da105f5eee9137cf3d87a11916e7beefab4d660a5c05dcb01c50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fadde899bc7da105f5eee9137cf3d87a11916e7beefab4d660a5c05dcb01c50->enter($__internal_8fadde899bc7da105f5eee9137cf3d87a11916e7beefab4d660a5c05dcb01c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9b879b48eac17d313fc205c88b8343a9ee535b2479668ebb90f3189b7d561d77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b879b48eac17d313fc205c88b8343a9ee535b2479668ebb90f3189b7d561d77->enter($__internal_9b879b48eac17d313fc205c88b8343a9ee535b2479668ebb90f3189b7d561d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
    <div class=\"container-fluid\" id=\"header_container\">
        <div class=\"row\">
            <div class=\"col-lg-2\" style=\"margin-left: -120px\">
                ";
        // line 15
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 16
            echo "                    <i class=\"material-icons\">person</i> Bonjour, ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
                ";
        } else {
            // line 18
            echo "                    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
                ";
        }
        // line 20
        echo "            </div>
            <div class=\"col-lg-offset-11\" style=\"padding-top: 10px\" id=\"logout\"><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"><i class=\"material-icons\">input</i></a></div>
        </div>
    </div>
    <div class=\"container-fluid\" id=\"main_container\">
    <!-- START TOP NAVBAR-->
    ";
        // line 26
        $this->loadTemplate("navbar.html.twig", "MALrmBundle:Client:edit.html.twig", 26)->display($context);
        // line 27
        echo "    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    ";
        // line 29
        $this->loadTemplate("sidebar.html.twig", "MALrmBundle:Client:edit.html.twig", 29)->display($context);
        // line 30
        echo "    <!-- END SIDEBAR-->

    <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
    <div class=\"row\">
        <h3>MISE A JOUR CLIENT</h3><hr style=\"border: 1px solid darkgray;\">
    </div>
    <div class=\"row\" id=\"head_row\">
        <h5>INTERFACE DE MISE A JOUR D'UN PROFIL CLIENT</h5>
    </div>

    <!-- BEGIN edit_form -->
    <div class=\"row\" id=\"form_edit_row\">
        <h1>";
        // line 42
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "denomination", array())), "html", null, true);
        echo "</h1>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-offset-11\">
            <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_client_index");
        echo "\"><i class=\"material-icons\" id=\"previous\" style=\"margin-left: 25px\">skip_previous</i></a>
        </div>
    </div>
    <!-- BEGIN FORM -->
    <div class=\"row\" id=\"form_row\">
        <div class=\"col-lg-6\" id=\"block_left_client\">
            <!-- BEGIN FORM-->
            ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("class" => "horizontal-form"));
        echo "
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Client <span class=\"star\">*</span></label>
                        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "denomination", array()), 'errors');
        echo "
                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "denomination", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Utilisateur <span class=\"star\">*</span></label>
                        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "chargeRecrutement", array()), 'errors');
        echo "
                        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "chargeRecrutement", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Adresse <span class=\"star\">*</span></label>
                        ";
        // line 74
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "adresse", array()), 'errors');
        echo "
                        ";
        // line 75
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "adresse", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Code Postal <span class=\"star\">*</span></label>
                        ";
        // line 81
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "villeCodePostal", array()), 'errors');
        echo "
                        ";
        // line 82
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "villeCodePostal", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Ville <span class=\"star\">*</span></label>
                        ";
        // line 90
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ville", array()), 'errors');
        echo "
                        ";
        // line 91
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ville", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Département <span class=\"star\">*</span></label>
                        ";
        // line 97
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "departement", array()), 'errors');
        echo "
                        ";
        // line 98
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "departement", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Pays <span class=\"star\">*</span></label>
                        ";
        // line 104
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "pays", array()), 'errors');
        echo "
                        ";
        // line 105
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "pays", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Type <span class=\"star\">*</span></label>
                        ";
        // line 113
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "typeClient", array()), 'errors');
        echo "
                        ";
        // line 114
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "typeClient", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Etat <span class=\"star\">*</span></label>
                        ";
        // line 120
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "etat", array()), 'errors');
        echo "
                        ";
        // line 121
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "etat", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"form-group\">
                        <div class=\"partenaire\">
                            <label class=\"control-label\">Partenaire <span class=\"star\">*</span></label>
                        </div>
                        ";
        // line 129
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "partenaire", array()), 'errors');
        echo "
                        ";
        // line 130
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "partenaire", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Commentaires</label>
                        ";
        // line 138
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "commentaire", array()), 'errors');
        echo "
                        ";
        // line 139
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "commentaire", array()), 'widget');
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
        // line 150
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "civilite", array()), 'errors');
        echo "
                        ";
        // line 151
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "civilite", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-5\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Nom</label>
                        ";
        // line 157
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nomContact", array()), 'errors');
        echo "
                        ";
        // line 158
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nomContact", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Prénom</label>
                        ";
        // line 164
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "prenomContact", array()), 'errors');
        echo "
                        ";
        // line 165
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "prenomContact", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-5\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Fonction du Contact</label>
                        ";
        // line 173
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fonctionContact", array()), 'errors');
        echo "
                        ";
        // line 174
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fonctionContact", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-7\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Email <span class=\"star\">*</span></label>
                        ";
        // line 180
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'errors');
        echo "
                        ";
        // line 181
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Téléphone<span class=\"star\">*</span></label>
                        ";
        // line 189
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "telephone", array()), 'errors');
        echo "
                        ";
        // line 190
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "telephone", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <hr style=\"border: 1px solid darkgray;\">
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Civilite</label>
                        ";
        // line 199
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "civilite2", array()), 'errors');
        echo "
                        ";
        // line 200
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "civilite2", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-5\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Nom</label>
                        ";
        // line 206
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nomContact2", array()), 'errors');
        echo "
                        ";
        // line 207
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nomContact2", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Prénom</label>
                        ";
        // line 213
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "prenomContact2", array()), 'errors');
        echo "
                        ";
        // line 214
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "prenomContact2", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-5\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Fonction du Contact</label>
                        ";
        // line 222
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fonctionContact2", array()), 'errors');
        echo "
                        ";
        // line 223
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fonctionContact2", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-7\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Email</label>
                        ";
        // line 229
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email2", array()), 'errors');
        echo "
                        ";
        // line 230
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email2", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Téléphone</label>
                        ";
        // line 238
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "telephone2", array()), 'errors');
        echo "
                        ";
        // line 239
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "telephone2", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <hr style=\"border: 1px solid darkgray;\">
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Civilite</label>
                        ";
        // line 248
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "civilite3", array()), 'errors');
        echo "
                        ";
        // line 249
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "civilite3", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-5\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Nom</label>
                        ";
        // line 255
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nomContact3", array()), 'errors');
        echo "
                        ";
        // line 256
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nomContact3", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Prénom</label>
                        ";
        // line 262
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "prenomContact3", array()), 'errors');
        echo "
                        ";
        // line 263
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "prenomContact3", array()), 'widget');
        echo "
                    </div>
                </div>

            </div>
            <div class=\"row\">
                <div class=\"col-lg-5\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Fonction du Contact</label>
                        ";
        // line 272
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fonctionContact3", array()), 'errors');
        echo "
                        ";
        // line 273
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fonctionContact3", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-7\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Email</label>
                        ";
        // line 279
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email3", array()), 'errors');
        echo "
                        ";
        // line 280
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email3", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Téléphone</label>
                        ";
        // line 288
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "telephone3", array()), 'errors');
        echo "
                        ";
        // line 289
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "telephone3", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-offset-9 col-lg-3\" style=\"margin-top: 30px\">
                <button type=\"submit\" style=\"width: 100%\" class=\"btn  btn-default\"><i class=\"fa fa-check\"></i>Enregister</button>
            </div>
        </div>
        ";
        // line 299
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
        <!-- END FORM-->
    </div>

";
        
        $__internal_9b879b48eac17d313fc205c88b8343a9ee535b2479668ebb90f3189b7d561d77->leave($__internal_9b879b48eac17d313fc205c88b8343a9ee535b2479668ebb90f3189b7d561d77_prof);

        
        $__internal_8fadde899bc7da105f5eee9137cf3d87a11916e7beefab4d660a5c05dcb01c50->leave($__internal_8fadde899bc7da105f5eee9137cf3d87a11916e7beefab4d660a5c05dcb01c50_prof);

    }

    public function getTemplateName()
    {
        return "MALrmBundle:Client:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  588 => 299,  575 => 289,  571 => 288,  560 => 280,  556 => 279,  547 => 273,  543 => 272,  531 => 263,  527 => 262,  518 => 256,  514 => 255,  505 => 249,  501 => 248,  489 => 239,  485 => 238,  474 => 230,  470 => 229,  461 => 223,  457 => 222,  446 => 214,  442 => 213,  433 => 207,  429 => 206,  420 => 200,  416 => 199,  404 => 190,  400 => 189,  389 => 181,  385 => 180,  376 => 174,  372 => 173,  361 => 165,  357 => 164,  348 => 158,  344 => 157,  335 => 151,  331 => 150,  317 => 139,  313 => 138,  302 => 130,  298 => 129,  287 => 121,  283 => 120,  274 => 114,  270 => 113,  259 => 105,  255 => 104,  246 => 98,  242 => 97,  233 => 91,  229 => 90,  218 => 82,  214 => 81,  205 => 75,  201 => 74,  190 => 66,  186 => 65,  177 => 59,  173 => 58,  165 => 53,  155 => 46,  148 => 42,  134 => 30,  132 => 29,  128 => 27,  126 => 26,  118 => 21,  115 => 20,  109 => 18,  103 => 16,  101 => 15,  95 => 11,  86 => 10,  73 => 7,  64 => 6,  51 => 4,  42 => 3,  11 => 1,);
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
        <h3>MISE A JOUR CLIENT</h3><hr style=\"border: 1px solid darkgray;\">
    </div>
    <div class=\"row\" id=\"head_row\">
        <h5>INTERFACE DE MISE A JOUR D'UN PROFIL CLIENT</h5>
    </div>

    <!-- BEGIN edit_form -->
    <div class=\"row\" id=\"form_edit_row\">
        <h1>{{ client.denomination|upper }}</h1>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-offset-11\">
            <a href=\"{{ path('ma_lrm_client_index') }}\"><i class=\"material-icons\" id=\"previous\" style=\"margin-left: 25px\">skip_previous</i></a>
        </div>
    </div>
    <!-- BEGIN FORM -->
    <div class=\"row\" id=\"form_row\">
        <div class=\"col-lg-6\" id=\"block_left_client\">
            <!-- BEGIN FORM-->
            {{ form_start(edit_form, {'class': 'horizontal-form'}) }}
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Client <span class=\"star\">*</span></label>
                        {{ form_errors(edit_form.denomination) }}
                        {{ form_widget(edit_form.denomination) }}
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Utilisateur <span class=\"star\">*</span></label>
                        {{ form_errors(edit_form.chargeRecrutement)}}
                        {{ form_widget(edit_form.chargeRecrutement)}}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Adresse <span class=\"star\">*</span></label>
                        {{ form_errors(edit_form.adresse) }}
                        {{ form_widget(edit_form.adresse) }}
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Code Postal <span class=\"star\">*</span></label>
                        {{ form_errors(edit_form.villeCodePostal)}}
                        {{ form_widget(edit_form.villeCodePostal) }}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Ville <span class=\"star\">*</span></label>
                        {{ form_errors(edit_form.ville)}}
                        {{ form_widget(edit_form.ville) }}
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Département <span class=\"star\">*</span></label>
                        {{ form_errors(edit_form.departement)}}
                        {{ form_widget(edit_form.departement) }}
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Pays <span class=\"star\">*</span></label>
                        {{ form_errors(edit_form.pays)}}
                        {{ form_widget(edit_form.pays) }}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Type <span class=\"star\">*</span></label>
                        {{ form_errors(edit_form.typeClient)}}
                        {{ form_widget(edit_form.typeClient ) }}
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Etat <span class=\"star\">*</span></label>
                        {{ form_errors(edit_form.etat)}}
                        {{ form_widget(edit_form.etat) }}
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"form-group\">
                        <div class=\"partenaire\">
                            <label class=\"control-label\">Partenaire <span class=\"star\">*</span></label>
                        </div>
                        {{ form_errors(edit_form.partenaire)}}
                        {{ form_widget(edit_form.partenaire) }}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Commentaires</label>
                        {{ form_errors(edit_form.commentaire)}}
                        {{ form_widget(edit_form.commentaire) }}
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-lg-6\" id=\"block_right_client\">
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Civilite</label>
                        {{ form_errors(edit_form.civilite)}}
                        {{ form_widget(edit_form.civilite) }}
                    </div>
                </div>
                <div class=\"col-lg-5\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Nom</label>
                        {{ form_errors(edit_form.nomContact)}}
                        {{ form_widget(edit_form.nomContact) }}
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Prénom</label>
                        {{ form_errors(edit_form.prenomContact)}}
                        {{ form_widget(edit_form.prenomContact) }}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-5\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Fonction du Contact</label>
                        {{ form_errors(edit_form.fonctionContact)}}
                        {{ form_widget(edit_form.fonctionContact) }}
                    </div>
                </div>
                <div class=\"col-lg-7\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Email <span class=\"star\">*</span></label>
                        {{ form_errors(edit_form.email)}}
                        {{ form_widget(edit_form.email) }}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Téléphone<span class=\"star\">*</span></label>
                        {{ form_errors(edit_form.telephone)}}
                        {{ form_widget(edit_form.telephone) }}
                    </div>
                </div>
            </div>
            <hr style=\"border: 1px solid darkgray;\">
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Civilite</label>
                        {{ form_errors(edit_form.civilite2)}}
                        {{ form_widget(edit_form.civilite2) }}
                    </div>
                </div>
                <div class=\"col-lg-5\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Nom</label>
                        {{ form_errors(edit_form.nomContact2)}}
                        {{ form_widget(edit_form.nomContact2) }}
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Prénom</label>
                        {{ form_errors(edit_form.prenomContact2)}}
                        {{ form_widget(edit_form.prenomContact2) }}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-5\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Fonction du Contact</label>
                        {{ form_errors(edit_form.fonctionContact2)}}
                        {{ form_widget(edit_form.fonctionContact2) }}
                    </div>
                </div>
                <div class=\"col-lg-7\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Email</label>
                        {{ form_errors(edit_form.email2)}}
                        {{ form_widget(edit_form.email2) }}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Téléphone</label>
                        {{ form_errors(edit_form.telephone2)}}
                        {{ form_widget(edit_form.telephone2) }}
                    </div>
                </div>
            </div>
            <hr style=\"border: 1px solid darkgray;\">
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Civilite</label>
                        {{ form_errors(edit_form.civilite3)}}
                        {{ form_widget(edit_form.civilite3) }}
                    </div>
                </div>
                <div class=\"col-lg-5\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Nom</label>
                        {{ form_errors(edit_form.nomContact3)}}
                        {{ form_widget(edit_form.nomContact3) }}
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Prénom</label>
                        {{ form_errors(edit_form.prenomContact3)}}
                        {{ form_widget(edit_form.prenomContact3) }}
                    </div>
                </div>

            </div>
            <div class=\"row\">
                <div class=\"col-lg-5\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Fonction du Contact</label>
                        {{ form_errors(edit_form.fonctionContact3)}}
                        {{ form_widget(edit_form.fonctionContact3) }}
                    </div>
                </div>
                <div class=\"col-lg-7\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Email</label>
                        {{ form_errors(edit_form.email3)}}
                        {{ form_widget(edit_form.email3) }}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Téléphone</label>
                        {{ form_errors(edit_form.telephone3)}}
                        {{ form_widget(edit_form.telephone3) }}
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-offset-9 col-lg-3\" style=\"margin-top: 30px\">
                <button type=\"submit\" style=\"width: 100%\" class=\"btn  btn-default\"><i class=\"fa fa-check\"></i>Enregister</button>
            </div>
        </div>
        {{ form_end(edit_form) }}
        <!-- END FORM-->
    </div>

{% endblock %}", "MALrmBundle:Client:edit.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle/Resources/views/Client/edit.html.twig");
    }
}
