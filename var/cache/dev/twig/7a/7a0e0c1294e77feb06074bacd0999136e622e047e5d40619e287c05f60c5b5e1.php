<?php

/* MALrmBundle:Candidat:edit.html.twig */
class __TwigTemplate_c9693e483614d729c297144df5fed42be1b2ececf888ec9029fe4b5119eb1cb7 extends Twig_Template
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
        $__internal_1674bc1fcfe0fb1738a4b778038df39004d7b9bc0f50c9aaaee7b65586c86498 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1674bc1fcfe0fb1738a4b778038df39004d7b9bc0f50c9aaaee7b65586c86498->enter($__internal_1674bc1fcfe0fb1738a4b778038df39004d7b9bc0f50c9aaaee7b65586c86498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Candidat:edit.html.twig"));

        $__internal_ef9da978c76caeb04d43a6c5c3bacfb3015869fc025f48a7186005127f97d838 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef9da978c76caeb04d43a6c5c3bacfb3015869fc025f48a7186005127f97d838->enter($__internal_ef9da978c76caeb04d43a6c5c3bacfb3015869fc025f48a7186005127f97d838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Candidat:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1674bc1fcfe0fb1738a4b778038df39004d7b9bc0f50c9aaaee7b65586c86498->leave($__internal_1674bc1fcfe0fb1738a4b778038df39004d7b9bc0f50c9aaaee7b65586c86498_prof);

        
        $__internal_ef9da978c76caeb04d43a6c5c3bacfb3015869fc025f48a7186005127f97d838->leave($__internal_ef9da978c76caeb04d43a6c5c3bacfb3015869fc025f48a7186005127f97d838_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2b51fb75eeadabbb5a80734e8abe103ea2a00d2cbf1fd22bc030dc8a29b4f6e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b51fb75eeadabbb5a80734e8abe103ea2a00d2cbf1fd22bc030dc8a29b4f6e0->enter($__internal_2b51fb75eeadabbb5a80734e8abe103ea2a00d2cbf1fd22bc030dc8a29b4f6e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c8f47756797515581bb02427c0cd92c4a93595a4cf10adc69f3d3ca0d18bbb08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8f47756797515581bb02427c0cd92c4a93595a4cf10adc69f3d3ca0d18bbb08->enter($__internal_c8f47756797515581bb02427c0cd92c4a93595a4cf10adc69f3d3ca0d18bbb08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_c8f47756797515581bb02427c0cd92c4a93595a4cf10adc69f3d3ca0d18bbb08->leave($__internal_c8f47756797515581bb02427c0cd92c4a93595a4cf10adc69f3d3ca0d18bbb08_prof);

        
        $__internal_2b51fb75eeadabbb5a80734e8abe103ea2a00d2cbf1fd22bc030dc8a29b4f6e0->leave($__internal_2b51fb75eeadabbb5a80734e8abe103ea2a00d2cbf1fd22bc030dc8a29b4f6e0_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_88ff1fa3db9eb1bae95eee47fe0e4ef5b5a17422655a124947f8f15b2b5a2df6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88ff1fa3db9eb1bae95eee47fe0e4ef5b5a17422655a124947f8f15b2b5a2df6->enter($__internal_88ff1fa3db9eb1bae95eee47fe0e4ef5b5a17422655a124947f8f15b2b5a2df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8b26edb6d18ceefee7cc14b234a85f6fce85c38786ba7a15789053c6a36bed69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b26edb6d18ceefee7cc14b234a85f6fce85c38786ba7a15789053c6a36bed69->enter($__internal_8b26edb6d18ceefee7cc14b234a85f6fce85c38786ba7a15789053c6a36bed69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ville.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    ";
        
        $__internal_8b26edb6d18ceefee7cc14b234a85f6fce85c38786ba7a15789053c6a36bed69->leave($__internal_8b26edb6d18ceefee7cc14b234a85f6fce85c38786ba7a15789053c6a36bed69_prof);

        
        $__internal_88ff1fa3db9eb1bae95eee47fe0e4ef5b5a17422655a124947f8f15b2b5a2df6->leave($__internal_88ff1fa3db9eb1bae95eee47fe0e4ef5b5a17422655a124947f8f15b2b5a2df6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c67384397f464d343ba5072765a6ed9db36f6931260ac37d433a3a213f69a158 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c67384397f464d343ba5072765a6ed9db36f6931260ac37d433a3a213f69a158->enter($__internal_c67384397f464d343ba5072765a6ed9db36f6931260ac37d433a3a213f69a158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4b6de2dfd41a4cfec9513121f0c439f226502e9dc01386ab604c554a83280612 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b6de2dfd41a4cfec9513121f0c439f226502e9dc01386ab604c554a83280612->enter($__internal_4b6de2dfd41a4cfec9513121f0c439f226502e9dc01386ab604c554a83280612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
    <div class=\"container-fluid\" id=\"header_container\">
        <div class=\"row\">
            <div class=\"col-lg-offset-10\">
                ";
        // line 15
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 16
            echo "                    <i class=\"material-icons\">person</i> Bonjour, ";
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
        // line 42
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "nom", array())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "prenom", array()), "html", null, true);
        echo "</h1>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-offset-11\">
            <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_candidat_index");
        echo "\"><i class=\"material-icons\" id=\"previous\">skip_previous</i></a>
        </div>
    </div>
    <!-- BEGIN FORM -->
    <div class=\"row\" id=\"form_row\">
        ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("class" => "horizontal-form"));
        echo "
        <div class=\"row\">
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Chargé RH</label>
                    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "chargeRecrutement", array()), 'errors');
        echo "
                    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "chargeRecrutement", array()), 'widget');
        echo "
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Offre d'emploi:</label>
                    ";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "emploi", array()), 'errors');
        echo "
                    ";
        // line 64
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
        // line 72
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "civilite", array()), 'errors');
        echo "
                    ";
        // line 73
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
        // line 81
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nom", array()), 'errors');
        echo "
                    ";
        // line 82
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nom", array()), 'widget');
        echo "
                </div>
            </div>
            <div class=\"col-lg-2\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Prénom:</label>
                    ";
        // line 88
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "prenom", array()), 'errors');
        echo "
                    ";
        // line 89
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
        // line 97
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "adresse", array()), 'errors');
        echo "
                    ";
        // line 98
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
        // line 106
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "villeCodePostal", array()), 'errors');
        echo "
                    ";
        // line 107
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "villeCodePostal", array()), 'widget');
        echo "
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Ville</label>
                    ";
        // line 113
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ville", array()), 'errors');
        echo "
                    ";
        // line 114
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
        // line 122
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "departement", array()), 'errors');
        echo "
                    ";
        // line 123
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "departement", array()), 'widget');
        echo "
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Pays</label>
                    ";
        // line 129
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "pays", array()), 'errors');
        echo "
                    ";
        // line 130
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
        // line 138
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateAnniversaire", array()), 'errors');
        echo "
                    ";
        // line 139
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateAnniversaire", array()), 'widget');
        echo "
                </div>
            </div>
            <div class=\"col-lg-1\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Age:</label>
                    ";
        // line 145
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "age", array()), 'errors');
        echo "
                    ";
        // line 146
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
        // line 154
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "telephone", array()), 'errors');
        echo "
                    ";
        // line 155
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "telephone", array()), 'widget');
        echo "
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Email</label>
                    ";
        // line 161
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'errors');
        echo "
                    ";
        // line 162
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
        // line 170
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "testPersonnalite", array()), 'errors');
        echo "
                    ";
        // line 171
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "testPersonnalite", array()), 'widget');
        echo "
                </div>
            </div>
            <div class=\"col-lg-2\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Date de relance:</label>
                    ";
        // line 177
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateRelance", array()), 'errors');
        echo "
                    ";
        // line 178
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
        // line 186
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cvCandidat", array()), 'errors');
        echo "
                    ";
        // line 187
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
        // line 195
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "commentaire", array()), 'errors');
        echo "
                    ";
        // line 196
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "commentaire", array()), 'widget');
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-offset-11\">
                <button type=\"submit\" class=\"btn  btn-default\"><i class=\"material-icons\">save</i></button>
            </div>
        </div>
        ";
        // line 205
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
    </div>

";
        
        $__internal_4b6de2dfd41a4cfec9513121f0c439f226502e9dc01386ab604c554a83280612->leave($__internal_4b6de2dfd41a4cfec9513121f0c439f226502e9dc01386ab604c554a83280612_prof);

        
        $__internal_c67384397f464d343ba5072765a6ed9db36f6931260ac37d433a3a213f69a158->leave($__internal_c67384397f464d343ba5072765a6ed9db36f6931260ac37d433a3a213f69a158_prof);

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
        return array (  429 => 205,  417 => 196,  413 => 195,  402 => 187,  398 => 186,  387 => 178,  383 => 177,  374 => 171,  370 => 170,  359 => 162,  355 => 161,  346 => 155,  342 => 154,  331 => 146,  327 => 145,  318 => 139,  314 => 138,  303 => 130,  299 => 129,  290 => 123,  286 => 122,  275 => 114,  271 => 113,  262 => 107,  258 => 106,  247 => 98,  243 => 97,  232 => 89,  228 => 88,  219 => 82,  215 => 81,  204 => 73,  200 => 72,  189 => 64,  185 => 63,  176 => 57,  172 => 56,  164 => 51,  156 => 46,  147 => 42,  132 => 29,  130 => 28,  126 => 26,  124 => 25,  117 => 20,  111 => 18,  103 => 16,  101 => 15,  95 => 11,  86 => 10,  73 => 7,  64 => 6,  51 => 4,  42 => 3,  11 => 1,);
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
        <h3>MISE A JOUR CANDIDAT</h3><hr style=\"border: 1px solid darkgray;\">
    </div>
    <div class=\"row\" id=\"head_row\">
        <h5>INTERFACE DE MISE A JOUR D'UN CANDIDAT:</h5>
    </div>


    <!-- BEGIN FORM -->
    <div class=\"row\" id=\"form_edit_row\">
        <h1>{{ candidat.nom|upper }} {{ candidat.prenom }}</h1>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-offset-11\">
            <a href=\"{{ path('ma_lrm_candidat_index') }}\"><i class=\"material-icons\" id=\"previous\">skip_previous</i></a>
        </div>
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
            <div class=\"col-lg-offset-11\">
                <button type=\"submit\" class=\"btn  btn-default\"><i class=\"material-icons\">save</i></button>
            </div>
        </div>
        {{ form_end(edit_form) }}
    </div>

{% endblock %}", "MALrmBundle:Candidat:edit.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle/Resources/views/Candidat/edit.html.twig");
    }
}
