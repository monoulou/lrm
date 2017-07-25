<?php

/* MALrmBundle:Candidat:edit.html.twig */
class __TwigTemplate_e2bc711c9d4c4347d81551f3709efc3a1ee7361e60975c2d68863c09f616add8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MALrmBundle:Candidat:edit.html.twig", 1);
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
        $__internal_9b86212482b80c26a9db6db66a6ac8eb116468f7ee76a5400b1e40ae3ca9c2e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b86212482b80c26a9db6db66a6ac8eb116468f7ee76a5400b1e40ae3ca9c2e5->enter($__internal_9b86212482b80c26a9db6db66a6ac8eb116468f7ee76a5400b1e40ae3ca9c2e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Candidat:edit.html.twig"));

        $__internal_a89fdc785240ade4529609a1aa21b16968144575f0abecf9eb47a3874a4eb678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a89fdc785240ade4529609a1aa21b16968144575f0abecf9eb47a3874a4eb678->enter($__internal_a89fdc785240ade4529609a1aa21b16968144575f0abecf9eb47a3874a4eb678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Candidat:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b86212482b80c26a9db6db66a6ac8eb116468f7ee76a5400b1e40ae3ca9c2e5->leave($__internal_9b86212482b80c26a9db6db66a6ac8eb116468f7ee76a5400b1e40ae3ca9c2e5_prof);

        
        $__internal_a89fdc785240ade4529609a1aa21b16968144575f0abecf9eb47a3874a4eb678->leave($__internal_a89fdc785240ade4529609a1aa21b16968144575f0abecf9eb47a3874a4eb678_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a7189ec5211b4f38e62c911838a9a2a9186181b92daeb6729149433205bb6318 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7189ec5211b4f38e62c911838a9a2a9186181b92daeb6729149433205bb6318->enter($__internal_a7189ec5211b4f38e62c911838a9a2a9186181b92daeb6729149433205bb6318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_daff1415b2e90352cec5abc1b1841ef47fd34a3abdd78bd24102f02d03626acc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daff1415b2e90352cec5abc1b1841ef47fd34a3abdd78bd24102f02d03626acc->enter($__internal_daff1415b2e90352cec5abc1b1841ef47fd34a3abdd78bd24102f02d03626acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_daff1415b2e90352cec5abc1b1841ef47fd34a3abdd78bd24102f02d03626acc->leave($__internal_daff1415b2e90352cec5abc1b1841ef47fd34a3abdd78bd24102f02d03626acc_prof);

        
        $__internal_a7189ec5211b4f38e62c911838a9a2a9186181b92daeb6729149433205bb6318->leave($__internal_a7189ec5211b4f38e62c911838a9a2a9186181b92daeb6729149433205bb6318_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_31d494387e7f8f6a029ade98dc3dffdfa13b0271d17eb7943962f70e142467e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31d494387e7f8f6a029ade98dc3dffdfa13b0271d17eb7943962f70e142467e6->enter($__internal_31d494387e7f8f6a029ade98dc3dffdfa13b0271d17eb7943962f70e142467e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9c2384537e3d911898b792868e0f3418ff3976ed00193d0d67c20ed4d26b859e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c2384537e3d911898b792868e0f3418ff3976ed00193d0d67c20ed4d26b859e->enter($__internal_9c2384537e3d911898b792868e0f3418ff3976ed00193d0d67c20ed4d26b859e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ville.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    ";
        
        $__internal_9c2384537e3d911898b792868e0f3418ff3976ed00193d0d67c20ed4d26b859e->leave($__internal_9c2384537e3d911898b792868e0f3418ff3976ed00193d0d67c20ed4d26b859e_prof);

        
        $__internal_31d494387e7f8f6a029ade98dc3dffdfa13b0271d17eb7943962f70e142467e6->leave($__internal_31d494387e7f8f6a029ade98dc3dffdfa13b0271d17eb7943962f70e142467e6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_000a4c5f95c47c9cd7fb746041b15733f06ce907eb28a15aa97ab566690461e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_000a4c5f95c47c9cd7fb746041b15733f06ce907eb28a15aa97ab566690461e1->enter($__internal_000a4c5f95c47c9cd7fb746041b15733f06ce907eb28a15aa97ab566690461e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0e7619b612bba8a0f013ebc93c9d6f30ea39e5dc96be7bd235a74f80d681d0b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e7619b612bba8a0f013ebc93c9d6f30ea39e5dc96be7bd235a74f80d681d0b9->enter($__internal_0e7619b612bba8a0f013ebc93c9d6f30ea39e5dc96be7bd235a74f80d681d0b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
    <div class=\"container-fluid\" id=\"header_container\">
        <div class=\"row\">
            <div class=\"col-lg-offset-9\">
                ";
        // line 15
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 16
            echo "                    Connecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "--<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
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
        </div>
    </div>
    <div class=\"container-fluid\" id=\"main_container\">
    <!-- START TOP NAVBAR-->
    ";
        // line 25
        $this->loadTemplate("navbar.html.twig", "MALrmBundle:Candidat:edit.html.twig", 25)->display($context);
        // line 26
        echo "    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    ";
        // line 28
        $this->loadTemplate("sidebar.html.twig", "MALrmBundle:Candidat:edit.html.twig", 28)->display($context);
        // line 29
        echo "    <!-- END SIDEBAR-->

    <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
    <div class=\"row\">
        <h3>MISE A JOUR CANDIDAT</h3><hr style=\"border: 1px solid darkgray;\">
    </div>
    <div class=\"row\" id=\"head_row\">
        <h5>INTERFACE DE MISE A JOUR D'UN CANDIDAT:</h5>
    </div>

    <!-- BEGIN FORM -->
    <div class=\"row\" id=\"form_edit_row\">
        <h1>";
        // line 41
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "nom", array())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "prenom", array()), "html", null, true);
        echo "</h1>
    </div>
    <!-- BEGIN FORM -->
    <div class=\"row\" id=\"form_row\">
        ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("class" => "horizontal-form"));
        echo "
        <div class=\"row\">
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Chargé RH</label>
                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "chargeRecrutement", array()), 'errors');
        echo "
                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "chargeRecrutement", array()), 'widget');
        echo "
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Offre d'emploi:</label>
                    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "emploi", array()), 'errors');
        echo "
                    ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "emploi", array()), 'widget');
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-2\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Civilité:</label>
                    ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "civilite", array()), 'errors');
        echo "
                    ";
        // line 67
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "civilite", array()), 'widget');
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Nom</label>
                    ";
        // line 75
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nom", array()), 'errors');
        echo "
                    ";
        // line 76
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nom", array()), 'widget');
        echo "
                </div>
            </div>
            <div class=\"col-lg-2\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Prénom:</label>
                    ";
        // line 82
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "prenom", array()), 'errors');
        echo "
                    ";
        // line 83
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "prenom", array()), 'widget');
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-5\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Adresse:</label>
                    ";
        // line 91
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "adresse", array()), 'errors');
        echo "
                    ";
        // line 92
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "adresse", array()), 'widget');
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-2\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Code Postal</label>
                    ";
        // line 100
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "villeCodePostal", array()), 'errors');
        echo "
                    ";
        // line 101
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "villeCodePostal", array()), 'widget');
        echo "
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Ville</label>
                    ";
        // line 107
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ville", array()), 'errors');
        echo "
                    ";
        // line 108
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ville", array()), 'widget');
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Département</label>
                    ";
        // line 116
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "departement", array()), 'errors');
        echo "
                    ";
        // line 117
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "departement", array()), 'widget');
        echo "
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Pays</label>
                    ";
        // line 123
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "pays", array()), 'errors');
        echo "
                    ";
        // line 124
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "pays", array()), 'widget');
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-2\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Date de naissance:</label>
                    ";
        // line 132
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateAnniversaire", array()), 'errors');
        echo "
                    ";
        // line 133
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateAnniversaire", array()), 'widget');
        echo "
                </div>
            </div>
            <div class=\"col-lg-1\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Age:</label>
                    ";
        // line 139
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "age", array()), 'errors');
        echo "
                    ";
        // line 140
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "age", array()), 'widget');
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "telephone", array()), 'errors');
        echo "
                    ";
        // line 149
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "telephone", array()), 'widget');
        echo "
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Email</label>
                    ";
        // line 155
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'errors');
        echo "
                    ";
        // line 156
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'widget');
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "testPersonnalite", array()), 'errors');
        echo "
                    ";
        // line 165
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "testPersonnalite", array()), 'widget');
        echo "
                </div>
            </div>
            <div class=\"col-lg-2\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Date de relance:</label>
                    ";
        // line 171
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateRelance", array()), 'errors');
        echo "
                    ";
        // line 172
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateRelance", array()), 'widget');
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">cv:</label>
                    ";
        // line 180
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cvCandidat", array()), 'errors');
        echo "
                    ";
        // line 181
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cvCandidat", array()), 'widget');
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "commentaire", array()), 'errors');
        echo "
                    ";
        // line 190
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "commentaire", array()), 'widget');
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
    </div>

";
        
        $__internal_0e7619b612bba8a0f013ebc93c9d6f30ea39e5dc96be7bd235a74f80d681d0b9->leave($__internal_0e7619b612bba8a0f013ebc93c9d6f30ea39e5dc96be7bd235a74f80d681d0b9_prof);

        
        $__internal_000a4c5f95c47c9cd7fb746041b15733f06ce907eb28a15aa97ab566690461e1->leave($__internal_000a4c5f95c47c9cd7fb746041b15733f06ce907eb28a15aa97ab566690461e1_prof);

    }

    public function getTemplateName()
    {
        return "MALrmBundle:Candidat:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  420 => 199,  408 => 190,  404 => 189,  393 => 181,  389 => 180,  378 => 172,  374 => 171,  365 => 165,  361 => 164,  350 => 156,  346 => 155,  337 => 149,  333 => 148,  322 => 140,  318 => 139,  309 => 133,  305 => 132,  294 => 124,  290 => 123,  281 => 117,  277 => 116,  266 => 108,  262 => 107,  253 => 101,  249 => 100,  238 => 92,  234 => 91,  223 => 83,  219 => 82,  210 => 76,  206 => 75,  195 => 67,  191 => 66,  180 => 58,  176 => 57,  167 => 51,  163 => 50,  155 => 45,  146 => 41,  132 => 29,  130 => 28,  126 => 26,  124 => 25,  117 => 20,  111 => 18,  103 => 16,  101 => 15,  95 => 11,  86 => 10,  73 => 7,  64 => 6,  51 => 4,  42 => 3,  11 => 1,);
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
        <h3>MISE A JOUR CANDIDAT</h3><hr style=\"border: 1px solid darkgray;\">
    </div>
    <div class=\"row\" id=\"head_row\">
        <h5>INTERFACE DE MISE A JOUR D'UN CANDIDAT:</h5>
    </div>

    <!-- BEGIN FORM -->
    <div class=\"row\" id=\"form_edit_row\">
        <h1>{{ candidat.nom|upper }} {{ candidat.prenom }}</h1>
    </div>
    <!-- BEGIN FORM -->
    <div class=\"row\" id=\"form_row\">
        {{ form_start(edit_form, {'class': 'horizontal-form'}) }}
        <div class=\"row\">
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Chargé RH</label>
                    {{ form_errors(edit_form.chargeRecrutement)}}
                    {{ form_widget(edit_form.chargeRecrutement)}}
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Offre d'emploi:</label>
                    {{ form_errors(edit_form.emploi)}}
                    {{ form_widget(edit_form.emploi)}}
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-2\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Civilité:</label>
                    {{ form_errors(edit_form.civilite) }}
                    {{ form_widget(edit_form.civilite) }}
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Nom</label>
                    {{ form_errors(edit_form.nom) }}
                    {{ form_widget(edit_form.nom) }}
                </div>
            </div>
            <div class=\"col-lg-2\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Prénom:</label>
                    {{ form_errors(edit_form.prenom) }}
                    {{ form_widget(edit_form.prenom) }}
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-5\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Adresse:</label>
                    {{ form_errors(edit_form.adresse) }}
                    {{ form_widget(edit_form.adresse) }}
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-2\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Code Postal</label>
                    {{ form_errors(edit_form.villeCodePostal)}}
                    {{ form_widget(edit_form.villeCodePostal) }}
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Ville</label>
                    {{ form_errors(edit_form.ville)}}
                    {{ form_widget(edit_form.ville) }}
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Département</label>
                    {{ form_errors(edit_form.departement)}}
                    {{ form_widget(edit_form.departement) }}
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Pays</label>
                    {{ form_errors(edit_form.pays)}}
                    {{ form_widget(edit_form.pays) }}
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-2\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Date de naissance:</label>
                    {{ form_errors(edit_form.dateAnniversaire) }}
                    {{ form_widget(edit_form.dateAnniversaire) }}
                </div>
            </div>
            <div class=\"col-lg-1\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Age:</label>
                    {{ form_errors(edit_form.age) }}
                    {{ form_widget(edit_form.age) }}
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-2\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Téléphone</label>
                    {{ form_errors(edit_form.telephone)}}
                    {{ form_widget(edit_form.telephone) }}
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Email</label>
                    {{ form_errors(edit_form.email)}}
                    {{ form_widget(edit_form.email) }}
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Test de personnalité:</label>
                    {{ form_errors(edit_form.testPersonnalite) }}
                    {{ form_widget(edit_form.testPersonnalite) }}
                </div>
            </div>
            <div class=\"col-lg-2\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Date de relance:</label>
                    {{ form_errors(edit_form.dateRelance) }}
                    {{ form_widget(edit_form.dateRelance) }}
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">cv:</label>
                    {{ form_errors(edit_form.cvCandidat) }}
                    {{ form_widget(edit_form.cvCandidat) }}
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Commentaires</label>
                    {{ form_errors(edit_form.commentaire)}}
                    {{ form_widget(edit_form.commentaire) }}
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-offset-5\">
                <button type=\"submit\" class=\"btn  btn-default\"><i class=\"fa fa-check\"></i>Enregister</button>
            </div>
        </div>
        {{ form_end(edit_form) }}
    </div>

{% endblock %}", "MALrmBundle:Candidat:edit.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle\\Resources\\views\\Candidat\\edit.html.twig");
    }
}
