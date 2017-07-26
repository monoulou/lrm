<?php

/* MALrmBundle:Client:edit.html.twig */
class __TwigTemplate_527e4a0068fc35479804f624657b19bf153857cd6bf77ca223f791cac072f7a1 extends Twig_Template
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
        $__internal_97ed91cab26b89f68fa159451f1cd6c4111a7c2d036a86a1d477d8adf880b345 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97ed91cab26b89f68fa159451f1cd6c4111a7c2d036a86a1d477d8adf880b345->enter($__internal_97ed91cab26b89f68fa159451f1cd6c4111a7c2d036a86a1d477d8adf880b345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Client:edit.html.twig"));

        $__internal_9aa528b88096cc1f068a9f196cfaf145287d4eaa5be794c6cf5d95a38d79c32f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aa528b88096cc1f068a9f196cfaf145287d4eaa5be794c6cf5d95a38d79c32f->enter($__internal_9aa528b88096cc1f068a9f196cfaf145287d4eaa5be794c6cf5d95a38d79c32f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Client:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97ed91cab26b89f68fa159451f1cd6c4111a7c2d036a86a1d477d8adf880b345->leave($__internal_97ed91cab26b89f68fa159451f1cd6c4111a7c2d036a86a1d477d8adf880b345_prof);

        
        $__internal_9aa528b88096cc1f068a9f196cfaf145287d4eaa5be794c6cf5d95a38d79c32f->leave($__internal_9aa528b88096cc1f068a9f196cfaf145287d4eaa5be794c6cf5d95a38d79c32f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cf39d22bca0e31510594cc86b83f82e01ef3ea301757f36b02ac9fbe5e3b4102 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf39d22bca0e31510594cc86b83f82e01ef3ea301757f36b02ac9fbe5e3b4102->enter($__internal_cf39d22bca0e31510594cc86b83f82e01ef3ea301757f36b02ac9fbe5e3b4102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8060bc971778fdfba447429fd64621acfd5818f236e6820443e6484ad2a57786 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8060bc971778fdfba447429fd64621acfd5818f236e6820443e6484ad2a57786->enter($__internal_8060bc971778fdfba447429fd64621acfd5818f236e6820443e6484ad2a57786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_8060bc971778fdfba447429fd64621acfd5818f236e6820443e6484ad2a57786->leave($__internal_8060bc971778fdfba447429fd64621acfd5818f236e6820443e6484ad2a57786_prof);

        
        $__internal_cf39d22bca0e31510594cc86b83f82e01ef3ea301757f36b02ac9fbe5e3b4102->leave($__internal_cf39d22bca0e31510594cc86b83f82e01ef3ea301757f36b02ac9fbe5e3b4102_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f5fb159adbfdf8c85a56342ad8acbcd2e719b6935b8247d414a073374663548c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5fb159adbfdf8c85a56342ad8acbcd2e719b6935b8247d414a073374663548c->enter($__internal_f5fb159adbfdf8c85a56342ad8acbcd2e719b6935b8247d414a073374663548c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1db281d353e139cca6faed5d99ae01fa4e66a416e910da426e6be802480c2cc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1db281d353e139cca6faed5d99ae01fa4e66a416e910da426e6be802480c2cc9->enter($__internal_1db281d353e139cca6faed5d99ae01fa4e66a416e910da426e6be802480c2cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ville.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    ";
        
        $__internal_1db281d353e139cca6faed5d99ae01fa4e66a416e910da426e6be802480c2cc9->leave($__internal_1db281d353e139cca6faed5d99ae01fa4e66a416e910da426e6be802480c2cc9_prof);

        
        $__internal_f5fb159adbfdf8c85a56342ad8acbcd2e719b6935b8247d414a073374663548c->leave($__internal_f5fb159adbfdf8c85a56342ad8acbcd2e719b6935b8247d414a073374663548c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa77035193da7608fdc02eaad434992a513cdc6d1706385c8102cb9c1f756df4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa77035193da7608fdc02eaad434992a513cdc6d1706385c8102cb9c1f756df4->enter($__internal_fa77035193da7608fdc02eaad434992a513cdc6d1706385c8102cb9c1f756df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0a9ecf0e2bbb765dbe3d4b1a09ecc984cb342da6f0d95d817a260f15e5a3bb8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a9ecf0e2bbb765dbe3d4b1a09ecc984cb342da6f0d95d817a260f15e5a3bb8c->enter($__internal_0a9ecf0e2bbb765dbe3d4b1a09ecc984cb342da6f0d95d817a260f15e5a3bb8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("navbar.html.twig", "MALrmBundle:Client:edit.html.twig", 25)->display($context);
        // line 26
        echo "    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    ";
        // line 28
        $this->loadTemplate("sidebar.html.twig", "MALrmBundle:Client:edit.html.twig", 28)->display($context);
        // line 29
        echo "    <!-- END SIDEBAR-->

    <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
    <div class=\"row\">
        <h3>MISE A JOUR CLIENT</h3><hr style=\"border: 1px solid darkgray;\">
    </div>
    <div class=\"row\" id=\"head_row\">
        <h5>INTERFACE DE MISE A JOUR D'UN PROFIL CLIENT:</h5>
    </div>

    <!-- BEGIN FORM -->
    <div class=\"row\" id=\"form_edit_row\">
        <h1>";
        // line 41
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "denomination", array())), "html", null, true);
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
                    <label class=\"control-label\">Client</label>
                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "denomination", array()), 'errors');
        echo "
                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "denomination", array()), 'widget');
        echo "
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Chargé RH</label>
                    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "chargeRecrutement", array()), 'errors');
        echo "
                    ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "chargeRecrutement", array()), 'widget');
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Adresse</label>
                    ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "adresse", array()), 'errors');
        echo "
                    ";
        // line 67
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "adresse", array()), 'widget');
        echo "
                </div>
            </div>
            <div class=\"col-lg-2\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Code Postal</label>
                    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "villeCodePostal", array()), 'errors');
        echo "
                    ";
        // line 74
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "villeCodePostal", array()), 'widget');
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Ville</label>
                    ";
        // line 82
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ville", array()), 'errors');
        echo "
                    ";
        // line 83
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ville", array()), 'widget');
        echo "
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Département</label>
                    ";
        // line 89
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "departement", array()), 'errors');
        echo "
                    ";
        // line 90
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "departement", array()), 'widget');
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Pays</label>
                    ";
        // line 98
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "pays", array()), 'errors');
        echo "
                    ";
        // line 99
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "pays", array()), 'widget');
        echo "
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Téléphone</label>
                    ";
        // line 105
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "telephone", array()), 'errors');
        echo "
                    ";
        // line 106
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "telephone", array()), 'widget');
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-2\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Civilite</label>
                    ";
        // line 114
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "civilite", array()), 'errors');
        echo "
                    ";
        // line 115
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "civilite", array()), 'widget');
        echo "
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Nom</label>
                    ";
        // line 121
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nomContact", array()), 'errors');
        echo "
                    ";
        // line 122
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nomContact", array()), 'widget');
        echo "
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Prénom</label>
                    ";
        // line 128
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "prenomContact", array()), 'errors');
        echo "
                    ";
        // line 129
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "prenomContact", array()), 'widget');
        echo "
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Fonction du Contact</label>
                    ";
        // line 135
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fonctionContact", array()), 'errors');
        echo "
                    ";
        // line 136
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fonctionContact", array()), 'widget');
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Email</label>
                    ";
        // line 144
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'errors');
        echo "
                    ";
        // line 145
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'widget');
        echo "
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Type</label>
                    ";
        // line 151
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "typeClient", array()), 'errors');
        echo "
                    ";
        // line 152
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "typeClient", array()), 'widget');
        echo "
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Etat</label>
                    ";
        // line 158
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "etat", array()), 'errors');
        echo "
                    ";
        // line 159
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "etat", array()), 'widget');
        echo "
                </div>
            </div>
            <div class=\"col-lg-2\">
                <div class=\"form-group\">
                    <div class=\"partenaire\">
                        <label class=\"control-label\">Partenaire</label>
                    </div>
                    ";
        // line 167
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "partenaire", array()), 'errors');
        echo "
                    ";
        // line 168
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "partenaire", array()), 'widget');
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-11\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Commentaires</label>
                    ";
        // line 176
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "commentaire", array()), 'errors');
        echo "
                    ";
        // line 177
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "commentaire", array()), 'widget');
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-offset-10\">
                <button type=\"submit\" class=\"btn  btn-default\"><i class=\"fa fa-check\"></i>Enregister</button>
            </div>
        </div>
        ";
        // line 186
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
    </div>

";
        
        $__internal_0a9ecf0e2bbb765dbe3d4b1a09ecc984cb342da6f0d95d817a260f15e5a3bb8c->leave($__internal_0a9ecf0e2bbb765dbe3d4b1a09ecc984cb342da6f0d95d817a260f15e5a3bb8c_prof);

        
        $__internal_fa77035193da7608fdc02eaad434992a513cdc6d1706385c8102cb9c1f756df4->leave($__internal_fa77035193da7608fdc02eaad434992a513cdc6d1706385c8102cb9c1f756df4_prof);

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
        return array (  399 => 186,  387 => 177,  383 => 176,  372 => 168,  368 => 167,  357 => 159,  353 => 158,  344 => 152,  340 => 151,  331 => 145,  327 => 144,  316 => 136,  312 => 135,  303 => 129,  299 => 128,  290 => 122,  286 => 121,  277 => 115,  273 => 114,  262 => 106,  258 => 105,  249 => 99,  245 => 98,  234 => 90,  230 => 89,  221 => 83,  217 => 82,  206 => 74,  202 => 73,  193 => 67,  189 => 66,  178 => 58,  174 => 57,  165 => 51,  161 => 50,  153 => 45,  146 => 41,  132 => 29,  130 => 28,  126 => 26,  124 => 25,  117 => 20,  111 => 18,  103 => 16,  101 => 15,  95 => 11,  86 => 10,  73 => 7,  64 => 6,  51 => 4,  42 => 3,  11 => 1,);
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
        <h3>MISE A JOUR CLIENT</h3><hr style=\"border: 1px solid darkgray;\">
    </div>
    <div class=\"row\" id=\"head_row\">
        <h5>INTERFACE DE MISE A JOUR D'UN PROFIL CLIENT:</h5>
    </div>

    <!-- BEGIN FORM -->
    <div class=\"row\" id=\"form_edit_row\">
        <h1>{{ client.denomination|upper }}</h1>
    </div>
    <!-- BEGIN FORM -->
    <div class=\"row\" id=\"form_row\">
        {{ form_start(edit_form, {'class': 'horizontal-form'}) }}
        <div class=\"row\">
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Client</label>
                    {{ form_errors(edit_form.denomination) }}
                    {{ form_widget(edit_form.denomination) }}
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Chargé RH</label>
                    {{ form_errors(edit_form.chargeRecrutement)}}
                    {{ form_widget(edit_form.chargeRecrutement)}}
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Adresse</label>
                    {{ form_errors(edit_form.adresse) }}
                    {{ form_widget(edit_form.adresse) }}
                </div>
            </div>
            <div class=\"col-lg-2\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Code Postal</label>
                    {{ form_errors(edit_form.villeCodePostal)}}
                    {{ form_widget(edit_form.villeCodePostal) }}
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Ville</label>
                    {{ form_errors(edit_form.ville)}}
                    {{ form_widget(edit_form.ville) }}
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Département</label>
                    {{ form_errors(edit_form.departement)}}
                    {{ form_widget(edit_form.departement) }}
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Pays</label>
                    {{ form_errors(edit_form.pays)}}
                    {{ form_widget(edit_form.pays) }}
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Téléphone</label>
                    {{ form_errors(edit_form.telephone)}}
                    {{ form_widget(edit_form.telephone) }}
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-2\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Civilite</label>
                    {{ form_errors(edit_form.civilite)}}
                    {{ form_widget(edit_form.civilite) }}
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Nom</label>
                    {{ form_errors(edit_form.nomContact)}}
                    {{ form_widget(edit_form.nomContact) }}
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Prénom</label>
                    {{ form_errors(edit_form.prenomContact)}}
                    {{ form_widget(edit_form.prenomContact) }}
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Fonction du Contact</label>
                    {{ form_errors(edit_form.fonctionContact)}}
                    {{ form_widget(edit_form.fonctionContact) }}
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Email</label>
                    {{ form_errors(edit_form.email)}}
                    {{ form_widget(edit_form.email) }}
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Type</label>
                    {{ form_errors(edit_form.typeClient)}}
                    {{ form_widget(edit_form.typeClient ) }}
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Etat</label>
                    {{ form_errors(edit_form.etat)}}
                    {{ form_widget(edit_form.etat) }}
                </div>
            </div>
            <div class=\"col-lg-2\">
                <div class=\"form-group\">
                    <div class=\"partenaire\">
                        <label class=\"control-label\">Partenaire</label>
                    </div>
                    {{ form_errors(edit_form.partenaire)}}
                    {{ form_widget(edit_form.partenaire) }}
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-11\">
                <div class=\"form-group\">
                    <label class=\"control-label\">Commentaires</label>
                    {{ form_errors(edit_form.commentaire)}}
                    {{ form_widget(edit_form.commentaire) }}
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-offset-10\">
                <button type=\"submit\" class=\"btn  btn-default\"><i class=\"fa fa-check\"></i>Enregister</button>
            </div>
        </div>
        {{ form_end(edit_form) }}
    </div>

{% endblock %}", "MALrmBundle:Client:edit.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle\\Resources\\views\\Client\\edit.html.twig");
    }
}
