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
        $__internal_a0caab612ffba0269c1cb47bf6e4a54f06026dc7f146d26638fbab14b8cdae40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0caab612ffba0269c1cb47bf6e4a54f06026dc7f146d26638fbab14b8cdae40->enter($__internal_a0caab612ffba0269c1cb47bf6e4a54f06026dc7f146d26638fbab14b8cdae40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Client:edit.html.twig"));

        $__internal_bfb866313f3dca44e483c8f55bf4f3d3e8187807428e7f402a19c1b31f7aeaa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfb866313f3dca44e483c8f55bf4f3d3e8187807428e7f402a19c1b31f7aeaa0->enter($__internal_bfb866313f3dca44e483c8f55bf4f3d3e8187807428e7f402a19c1b31f7aeaa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Client:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0caab612ffba0269c1cb47bf6e4a54f06026dc7f146d26638fbab14b8cdae40->leave($__internal_a0caab612ffba0269c1cb47bf6e4a54f06026dc7f146d26638fbab14b8cdae40_prof);

        
        $__internal_bfb866313f3dca44e483c8f55bf4f3d3e8187807428e7f402a19c1b31f7aeaa0->leave($__internal_bfb866313f3dca44e483c8f55bf4f3d3e8187807428e7f402a19c1b31f7aeaa0_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_480e8176dbe5e184bc3911e32b48db9580f094d1a217b96f9c0f450dc321d6fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_480e8176dbe5e184bc3911e32b48db9580f094d1a217b96f9c0f450dc321d6fa->enter($__internal_480e8176dbe5e184bc3911e32b48db9580f094d1a217b96f9c0f450dc321d6fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9faa9018b33a3559b2b899abc676c516616f16134049e49be365bf701c43ad5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9faa9018b33a3559b2b899abc676c516616f16134049e49be365bf701c43ad5d->enter($__internal_9faa9018b33a3559b2b899abc676c516616f16134049e49be365bf701c43ad5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_9faa9018b33a3559b2b899abc676c516616f16134049e49be365bf701c43ad5d->leave($__internal_9faa9018b33a3559b2b899abc676c516616f16134049e49be365bf701c43ad5d_prof);

        
        $__internal_480e8176dbe5e184bc3911e32b48db9580f094d1a217b96f9c0f450dc321d6fa->leave($__internal_480e8176dbe5e184bc3911e32b48db9580f094d1a217b96f9c0f450dc321d6fa_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c362302785907b67b700bd5f5b55f31f709ea8eef9bceb9d700402031d7be47b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c362302785907b67b700bd5f5b55f31f709ea8eef9bceb9d700402031d7be47b->enter($__internal_c362302785907b67b700bd5f5b55f31f709ea8eef9bceb9d700402031d7be47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f46969bd1e54339a62ea642cb7bac387b9068f4ea38012dcd86667d150987103 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f46969bd1e54339a62ea642cb7bac387b9068f4ea38012dcd86667d150987103->enter($__internal_f46969bd1e54339a62ea642cb7bac387b9068f4ea38012dcd86667d150987103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ville.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    ";
        
        $__internal_f46969bd1e54339a62ea642cb7bac387b9068f4ea38012dcd86667d150987103->leave($__internal_f46969bd1e54339a62ea642cb7bac387b9068f4ea38012dcd86667d150987103_prof);

        
        $__internal_c362302785907b67b700bd5f5b55f31f709ea8eef9bceb9d700402031d7be47b->leave($__internal_c362302785907b67b700bd5f5b55f31f709ea8eef9bceb9d700402031d7be47b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_79a5a5f0c65eb1bef186fdec536a4c943a98dfed30767011798ade621ef7573f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79a5a5f0c65eb1bef186fdec536a4c943a98dfed30767011798ade621ef7573f->enter($__internal_79a5a5f0c65eb1bef186fdec536a4c943a98dfed30767011798ade621ef7573f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_37ccfe393816906ef6ded887c6da54baa4683f4689c0e71533b417af0bf99bbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37ccfe393816906ef6ded887c6da54baa4683f4689c0e71533b417af0bf99bbc->enter($__internal_37ccfe393816906ef6ded887c6da54baa4683f4689c0e71533b417af0bf99bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_37ccfe393816906ef6ded887c6da54baa4683f4689c0e71533b417af0bf99bbc->leave($__internal_37ccfe393816906ef6ded887c6da54baa4683f4689c0e71533b417af0bf99bbc_prof);

        
        $__internal_79a5a5f0c65eb1bef186fdec536a4c943a98dfed30767011798ade621ef7573f->leave($__internal_79a5a5f0c65eb1bef186fdec536a4c943a98dfed30767011798ade621ef7573f_prof);

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

{% endblock %}", "MALrmBundle:Client:edit.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle/Resources/views/Client/edit.html.twig");
    }
}