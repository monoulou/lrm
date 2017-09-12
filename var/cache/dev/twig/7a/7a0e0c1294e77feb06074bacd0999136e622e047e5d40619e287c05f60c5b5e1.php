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
        $__internal_865ad0ab6fc75b42a5d25b27c0e57808cdc0406c1c3cd8d36568526aaca7e94d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_865ad0ab6fc75b42a5d25b27c0e57808cdc0406c1c3cd8d36568526aaca7e94d->enter($__internal_865ad0ab6fc75b42a5d25b27c0e57808cdc0406c1c3cd8d36568526aaca7e94d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Candidat:edit.html.twig"));

        $__internal_b6e0b7c7cac6967891d5deda182c5556356472c1dcb801419e180278408cc28c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6e0b7c7cac6967891d5deda182c5556356472c1dcb801419e180278408cc28c->enter($__internal_b6e0b7c7cac6967891d5deda182c5556356472c1dcb801419e180278408cc28c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Candidat:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_865ad0ab6fc75b42a5d25b27c0e57808cdc0406c1c3cd8d36568526aaca7e94d->leave($__internal_865ad0ab6fc75b42a5d25b27c0e57808cdc0406c1c3cd8d36568526aaca7e94d_prof);

        
        $__internal_b6e0b7c7cac6967891d5deda182c5556356472c1dcb801419e180278408cc28c->leave($__internal_b6e0b7c7cac6967891d5deda182c5556356472c1dcb801419e180278408cc28c_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bb9dbfe79829489d067bf6983a88472f223061ed17e5dc6bb8cd02d068796a4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb9dbfe79829489d067bf6983a88472f223061ed17e5dc6bb8cd02d068796a4b->enter($__internal_bb9dbfe79829489d067bf6983a88472f223061ed17e5dc6bb8cd02d068796a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_44cc27f333a50f60d4b8d2450d73f83c6e39bb78d61f8a5b033e1390e2ba6f52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44cc27f333a50f60d4b8d2450d73f83c6e39bb78d61f8a5b033e1390e2ba6f52->enter($__internal_44cc27f333a50f60d4b8d2450d73f83c6e39bb78d61f8a5b033e1390e2ba6f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_44cc27f333a50f60d4b8d2450d73f83c6e39bb78d61f8a5b033e1390e2ba6f52->leave($__internal_44cc27f333a50f60d4b8d2450d73f83c6e39bb78d61f8a5b033e1390e2ba6f52_prof);

        
        $__internal_bb9dbfe79829489d067bf6983a88472f223061ed17e5dc6bb8cd02d068796a4b->leave($__internal_bb9dbfe79829489d067bf6983a88472f223061ed17e5dc6bb8cd02d068796a4b_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f8b6b48260b4b3272cb25c8d506a6cc2afebae4f2c6bcad80b50e56971982062 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8b6b48260b4b3272cb25c8d506a6cc2afebae4f2c6bcad80b50e56971982062->enter($__internal_f8b6b48260b4b3272cb25c8d506a6cc2afebae4f2c6bcad80b50e56971982062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ce3543998c31b9beea2b0b200ceedb8e252026028a5ef2b10f1eaa8ce4320b5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce3543998c31b9beea2b0b200ceedb8e252026028a5ef2b10f1eaa8ce4320b5d->enter($__internal_ce3543998c31b9beea2b0b200ceedb8e252026028a5ef2b10f1eaa8ce4320b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ville.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    ";
        
        $__internal_ce3543998c31b9beea2b0b200ceedb8e252026028a5ef2b10f1eaa8ce4320b5d->leave($__internal_ce3543998c31b9beea2b0b200ceedb8e252026028a5ef2b10f1eaa8ce4320b5d_prof);

        
        $__internal_f8b6b48260b4b3272cb25c8d506a6cc2afebae4f2c6bcad80b50e56971982062->leave($__internal_f8b6b48260b4b3272cb25c8d506a6cc2afebae4f2c6bcad80b50e56971982062_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c2ec17829fecdd6e03a799e8224d5e30392ab30e4ef02ca18d32d0813fd25ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c2ec17829fecdd6e03a799e8224d5e30392ab30e4ef02ca18d32d0813fd25ac->enter($__internal_4c2ec17829fecdd6e03a799e8224d5e30392ab30e4ef02ca18d32d0813fd25ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_05de8e3c0a74ba234573a0aca0e19be65fb04f99674f7876dbbef002ed0dd0d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05de8e3c0a74ba234573a0aca0e19be65fb04f99674f7876dbbef002ed0dd0d4->enter($__internal_05de8e3c0a74ba234573a0aca0e19be65fb04f99674f7876dbbef002ed0dd0d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("navbar.html.twig", "MALrmBundle:Candidat:edit.html.twig", 26)->display($context);
        // line 27
        echo "    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    ";
        // line 29
        $this->loadTemplate("sidebar.html.twig", "MALrmBundle:Candidat:edit.html.twig", 29)->display($context);
        // line 30
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
        // line 43
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "nom", array())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "prenom", array()), "html", null, true);
        echo "</h1>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-offset-11\">
            <a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_candidat_index");
        echo "\"><i class=\"material-icons\" id=\"previous\">skip_previous</i></a>
        </div>
    </div>
    <!-- BEGIN FORM -->
    <div class=\"row\" id=\"form_row\">
        <div class=\"col-lg-6\" id=\"block_left_candidat\">
            <!-- BEGIN FORM-->
            ";
        // line 54
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("class" => "horizontal-form"));
        echo "
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Utilisateur</label>
                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "chargeRecrutement", array()), 'errors');
        echo "
                        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "chargeRecrutement", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Offre d'emploi</label>
                        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "emploi", array()), 'errors');
        echo "
                        ";
        // line 67
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "emploi", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Civilité</label>
                        ";
        // line 75
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "civilite", array()), 'errors');
        echo "
                        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "civilite", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-5\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Nom</label>
                        ";
        // line 82
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nom", array()), 'errors');
        echo "
                        ";
        // line 83
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nom", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Prénom</label>
                        ";
        // line 89
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "prenom", array()), 'errors');
        echo "
                        ";
        // line 90
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "prenom", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Adresse</label>
                        ";
        // line 98
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "adresse", array()), 'errors');
        echo "
                        ";
        // line 99
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "adresse", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Code Postal</label>
                        ";
        // line 105
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "villeCodePostal", array()), 'errors');
        echo "
                        ";
        // line 106
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "villeCodePostal", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Ville</label>
                        ";
        // line 114
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ville", array()), 'errors');
        echo "
                        ";
        // line 115
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ville", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Département</label>
                        ";
        // line 121
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "departement", array()), 'errors');
        echo "
                        ";
        // line 122
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "departement", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Pays</label>
                        ";
        // line 128
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "pays", array()), 'errors');
        echo "
                        ";
        // line 129
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "pays", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-6\" id=\"block_right_candidat\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Date de naissance</label>
                        ";
        // line 140
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateAnniversaire", array()), 'errors');
        echo "
                        ";
        // line 141
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateAnniversaire", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-2\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Age</label>
                        ";
        // line 148
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "age", array()), 'errors');
        echo "
                        ";
        // line 149
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "age", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Test de personnalité</label>
                        ";
        // line 155
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "testPersonnalite", array()), 'errors');
        echo "
                        ";
        // line 156
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "testPersonnalite", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-5\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Téléphone</label>
                        ";
        // line 164
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "telephone", array()), 'errors');
        echo "
                        ";
        // line 165
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "telephone", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-7\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Email</label>
                        ";
        // line 171
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'errors');
        echo "
                        ";
        // line 172
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Date de relance</label>
                        ";
        // line 180
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateRelance", array()), 'errors');
        echo "
                        ";
        // line 181
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateRelance", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-5\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">cv<em>(format pdf ou .doc)</em></label>
                        ";
        // line 187
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cvCandidat", array()), 'errors');
        echo "
                        ";
        // line 188
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cvCandidat", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Commentaires</label>
                        ";
        // line 196
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "commentaire", array()), 'errors');
        echo "
                        ";
        // line 197
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "commentaire", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-offset-7 col-lg-5\">
                    <button type=\"submit\" style=\"width: 100%;\" class=\"btn  btn-default\"><i class=\"fa fa-check\"></i>Enregister</button>
                </div>
            </div>
            ";
        // line 206
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
            <!-- END FORM-->
        </div>
    </div>

";
        
        $__internal_05de8e3c0a74ba234573a0aca0e19be65fb04f99674f7876dbbef002ed0dd0d4->leave($__internal_05de8e3c0a74ba234573a0aca0e19be65fb04f99674f7876dbbef002ed0dd0d4_prof);

        
        $__internal_4c2ec17829fecdd6e03a799e8224d5e30392ab30e4ef02ca18d32d0813fd25ac->leave($__internal_4c2ec17829fecdd6e03a799e8224d5e30392ab30e4ef02ca18d32d0813fd25ac_prof);

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
        return array (  433 => 206,  421 => 197,  417 => 196,  406 => 188,  402 => 187,  393 => 181,  389 => 180,  378 => 172,  374 => 171,  365 => 165,  361 => 164,  350 => 156,  346 => 155,  337 => 149,  332 => 148,  323 => 141,  318 => 140,  305 => 129,  301 => 128,  292 => 122,  288 => 121,  279 => 115,  275 => 114,  264 => 106,  260 => 105,  251 => 99,  247 => 98,  236 => 90,  232 => 89,  223 => 83,  219 => 82,  210 => 76,  206 => 75,  195 => 67,  191 => 66,  182 => 60,  178 => 59,  170 => 54,  160 => 47,  151 => 43,  136 => 30,  134 => 29,  130 => 27,  128 => 26,  121 => 21,  115 => 19,  107 => 17,  105 => 16,  99 => 12,  90 => 11,  78 => 8,  73 => 7,  64 => 6,  51 => 4,  42 => 3,  11 => 1,);
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
        <div class=\"col-lg-6\" id=\"block_left_candidat\">
            <!-- BEGIN FORM-->
            {{ form_start(edit_form, {'class': 'horizontal-form'}) }}
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Utilisateur</label>
                        {{ form_errors(edit_form.chargeRecrutement)}}
                        {{ form_widget(edit_form.chargeRecrutement)}}
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Offre d'emploi</label>
                        {{ form_errors(edit_form.emploi)}}
                        {{ form_widget(edit_form.emploi)}}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Civilité</label>
                        {{ form_errors(edit_form.civilite) }}
                        {{ form_widget(edit_form.civilite) }}
                    </div>
                </div>
                <div class=\"col-lg-5\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Nom</label>
                        {{ form_errors(edit_form.nom) }}
                        {{ form_widget(edit_form.nom) }}
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Prénom</label>
                        {{ form_errors(edit_form.prenom) }}
                        {{ form_widget(edit_form.prenom) }}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Adresse</label>
                        {{ form_errors(edit_form.adresse) }}
                        {{ form_widget(edit_form.adresse) }}
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Code Postal</label>
                        {{ form_errors(edit_form.villeCodePostal)}}
                        {{ form_widget(edit_form.villeCodePostal) }}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Ville</label>
                        {{ form_errors(edit_form.ville)}}
                        {{ form_widget(edit_form.ville) }}
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Département</label>
                        {{ form_errors(edit_form.departement)}}
                        {{ form_widget(edit_form.departement) }}
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Pays</label>
                        {{ form_errors(edit_form.pays)}}
                        {{ form_widget(edit_form.pays) }}
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-6\" id=\"block_right_candidat\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Date de naissance</label>
                        {#<input  class=\"form-control\" type=\"text\" name=\"ma_lrmbundle_candidat[dateAnniversaire]\" id=\"ma_lrmbundle_candidat_dateAnniversaire\" />#}
                        {{ form_errors(edit_form.dateAnniversaire) }}
                        {{ form_widget(edit_form.dateAnniversaire) }}
                    </div>
                </div>
                <div class=\"col-lg-2\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Age</label>
                        {#<input  class=\"form-control\" type=\"text\" name=\"ma_lrmbundle_candidat[age]\" id=\"ma_lrmbundle_candidat_age\" />#}
                        {{ form_errors(edit_form.age) }}
                        {{ form_widget(edit_form.age) }}
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Test de personnalité</label>
                        {{ form_errors(edit_form.testPersonnalite) }}
                        {{ form_widget(edit_form.testPersonnalite) }}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-5\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Téléphone</label>
                        {{ form_errors(edit_form.telephone)}}
                        {{ form_widget(edit_form.telephone) }}
                    </div>
                </div>
                <div class=\"col-lg-7\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Email</label>
                        {{ form_errors(edit_form.email)}}
                        {{ form_widget(edit_form.email) }}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Date de relance</label>
                        {{ form_errors(edit_form.dateRelance) }}
                        {{ form_widget(edit_form.dateRelance) }}
                    </div>
                </div>
                <div class=\"col-lg-5\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">cv<em>(format pdf ou .doc)</em></label>
                        {{ form_errors(edit_form.cvCandidat) }}
                        {{ form_widget(edit_form.cvCandidat) }}
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
            <div class=\"row\">
                <div class=\"col-lg-offset-7 col-lg-5\">
                    <button type=\"submit\" style=\"width: 100%;\" class=\"btn  btn-default\"><i class=\"fa fa-check\"></i>Enregister</button>
                </div>
            </div>
            {{ form_end(edit_form) }}
            <!-- END FORM-->
        </div>
    </div>

{% endblock %}", "MALrmBundle:Candidat:edit.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle/Resources/views/Candidat/edit.html.twig");
    }
}
