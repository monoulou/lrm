<?php

/* MALrmBundle:Client:new.html.twig */
class __TwigTemplate_c2fcaa36b8e148cbb3fa17fafead326deb2990206a05ce2c223f5cb9e30f3c92 extends Twig_Template
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
        $__internal_ab84872df1da1c5e5250ff36a94f322eca79ddc734b0a829efbff99a5a3557f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab84872df1da1c5e5250ff36a94f322eca79ddc734b0a829efbff99a5a3557f9->enter($__internal_ab84872df1da1c5e5250ff36a94f322eca79ddc734b0a829efbff99a5a3557f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Client:new.html.twig"));

        $__internal_fd178dac47844caef9fc8f1fa3d4a8ca23032d33876a951809b84950c4bb6912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd178dac47844caef9fc8f1fa3d4a8ca23032d33876a951809b84950c4bb6912->enter($__internal_fd178dac47844caef9fc8f1fa3d4a8ca23032d33876a951809b84950c4bb6912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Client:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab84872df1da1c5e5250ff36a94f322eca79ddc734b0a829efbff99a5a3557f9->leave($__internal_ab84872df1da1c5e5250ff36a94f322eca79ddc734b0a829efbff99a5a3557f9_prof);

        
        $__internal_fd178dac47844caef9fc8f1fa3d4a8ca23032d33876a951809b84950c4bb6912->leave($__internal_fd178dac47844caef9fc8f1fa3d4a8ca23032d33876a951809b84950c4bb6912_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0dc4f039bc273adda340039bed38200cca5517429660110c352585ea5f92e37b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dc4f039bc273adda340039bed38200cca5517429660110c352585ea5f92e37b->enter($__internal_0dc4f039bc273adda340039bed38200cca5517429660110c352585ea5f92e37b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c36a4425f041892b59659fd8e91914a3c8f9d77a57d393ecf92a277b6ca9c547 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c36a4425f041892b59659fd8e91914a3c8f9d77a57d393ecf92a277b6ca9c547->enter($__internal_c36a4425f041892b59659fd8e91914a3c8f9d77a57d393ecf92a277b6ca9c547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_c36a4425f041892b59659fd8e91914a3c8f9d77a57d393ecf92a277b6ca9c547->leave($__internal_c36a4425f041892b59659fd8e91914a3c8f9d77a57d393ecf92a277b6ca9c547_prof);

        
        $__internal_0dc4f039bc273adda340039bed38200cca5517429660110c352585ea5f92e37b->leave($__internal_0dc4f039bc273adda340039bed38200cca5517429660110c352585ea5f92e37b_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_276c5b8915e5172a9b77f1ae5846c2253b9fc94acf3aab23dba4c7f4a69ea557 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_276c5b8915e5172a9b77f1ae5846c2253b9fc94acf3aab23dba4c7f4a69ea557->enter($__internal_276c5b8915e5172a9b77f1ae5846c2253b9fc94acf3aab23dba4c7f4a69ea557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2eef00f1e8f4bff766360a9ce84381f32ec9a43f3cd459982720791101c43b16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eef00f1e8f4bff766360a9ce84381f32ec9a43f3cd459982720791101c43b16->enter($__internal_2eef00f1e8f4bff766360a9ce84381f32ec9a43f3cd459982720791101c43b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ville.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_2eef00f1e8f4bff766360a9ce84381f32ec9a43f3cd459982720791101c43b16->leave($__internal_2eef00f1e8f4bff766360a9ce84381f32ec9a43f3cd459982720791101c43b16_prof);

        
        $__internal_276c5b8915e5172a9b77f1ae5846c2253b9fc94acf3aab23dba4c7f4a69ea557->leave($__internal_276c5b8915e5172a9b77f1ae5846c2253b9fc94acf3aab23dba4c7f4a69ea557_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ddc55e093f7529cbee226b946fc672af95b42b8c7c04f0260ec0802ed46d8354 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddc55e093f7529cbee226b946fc672af95b42b8c7c04f0260ec0802ed46d8354->enter($__internal_ddc55e093f7529cbee226b946fc672af95b42b8c7c04f0260ec0802ed46d8354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7486c3164b9c1d1c568f30c6ce6098ba4f26bfc191d5328c27485239454c0d54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7486c3164b9c1d1c568f30c6ce6098ba4f26bfc191d5328c27485239454c0d54->enter($__internal_7486c3164b9c1d1c568f30c6ce6098ba4f26bfc191d5328c27485239454c0d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
    <div class=\"container-fluid\" id=\"header_container\">
        <div class=\"row\">
            <div class=\"col-lg-offset-9\">
                ";
        // line 16
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 17
            echo "                    Connecté en tant que ";
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
            <!-- BEGIN FORM-->
            ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("class" => "horizontal-form"));
        echo "
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Client</label>
                        ";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "denomination", array()), 'errors');
        echo "
                        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "denomination", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Chargé RH</label>
                        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "chargeRecrutement", array()), 'errors');
        echo "
                        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "chargeRecrutement", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
             <div class=\"row\">
                 <div class=\"col-lg-4\">
                     <div class=\"form-group\">
                         <label class=\"control-label\">Adresse</label>
                         ";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'errors');
        echo "
                         ";
        // line 64
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget');
        echo "
                     </div>
                 </div>
                 <div class=\"col-lg-2\">
                     <div class=\"form-group\">
                         <label class=\"control-label\">Code Postal</label>
                         ";
        // line 70
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "villeCodePostal", array()), 'errors');
        echo "
                         ";
        // line 71
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "villeCodePostal", array()), 'widget');
        echo "
                     </div>
                 </div>
             </div>
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Ville</label>
                        ";
        // line 79
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'errors');
        echo "
                        ";
        // line 80
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Département</label>
                        ";
        // line 86
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departement", array()), 'errors');
        echo "
                        ";
        // line 87
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departement", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Pays</label>
                        ";
        // line 95
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'errors');
        echo "
                        ";
        // line 96
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Téléphone</label>
                        ";
        // line 102
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'errors');
        echo "
                        ";
        // line 103
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-2\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Civilite</label>
                        ";
        // line 111
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "civilite", array()), 'errors');
        echo "
                        ";
        // line 112
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "civilite", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Nom</label>
                        ";
        // line 118
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomContact", array()), 'errors');
        echo "
                        ";
        // line 119
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomContact", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Prénom</label>
                        ";
        // line 125
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenomContact", array()), 'errors');
        echo "
                        ";
        // line 126
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenomContact", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Fonction du Contact</label>
                        ";
        // line 132
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fonctionContact", array()), 'errors');
        echo "
                        ";
        // line 133
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fonctionContact", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Email</label>
                        ";
        // line 141
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                        ";
        // line 142
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Type</label>
                        ";
        // line 148
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeClient", array()), 'errors');
        echo "
                        ";
        // line 149
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeClient", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Etat</label>
                        ";
        // line 155
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "etat", array()), 'errors');
        echo "
                        ";
        // line 156
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "etat", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-2\">
                    <div class=\"form-group\">
                        <div class=\"partenaire\">
                            <label class=\"control-label\">Partenaire</label>
                        </div>
                        ";
        // line 164
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "partenaire", array()), 'errors');
        echo "
                        ";
        // line 165
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "partenaire", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-11\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Commentaires</label>
                        ";
        // line 173
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'errors');
        echo "
                        ";
        // line 174
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'widget');
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
        // line 183
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            <!-- END FORM-->
        </div>
    </div>

";
        
        $__internal_7486c3164b9c1d1c568f30c6ce6098ba4f26bfc191d5328c27485239454c0d54->leave($__internal_7486c3164b9c1d1c568f30c6ce6098ba4f26bfc191d5328c27485239454c0d54_prof);

        
        $__internal_ddc55e093f7529cbee226b946fc672af95b42b8c7c04f0260ec0802ed46d8354->leave($__internal_ddc55e093f7529cbee226b946fc672af95b42b8c7c04f0260ec0802ed46d8354_prof);

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
        return array (  392 => 183,  380 => 174,  376 => 173,  365 => 165,  361 => 164,  350 => 156,  346 => 155,  337 => 149,  333 => 148,  324 => 142,  320 => 141,  309 => 133,  305 => 132,  296 => 126,  292 => 125,  283 => 119,  279 => 118,  270 => 112,  266 => 111,  255 => 103,  251 => 102,  242 => 96,  238 => 95,  227 => 87,  223 => 86,  214 => 80,  210 => 79,  199 => 71,  195 => 70,  186 => 64,  182 => 63,  171 => 55,  167 => 54,  158 => 48,  154 => 47,  146 => 42,  132 => 30,  130 => 29,  126 => 27,  124 => 26,  117 => 21,  111 => 19,  103 => 17,  101 => 16,  95 => 12,  86 => 11,  73 => 7,  64 => 6,  51 => 4,  42 => 3,  11 => 1,);
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
            <h3>AJOUTER UNE ENTREPRISE</h3><hr style=\"border: 1px solid darkgray;\">
        </div>
        <div class=\"row\" id=\"head_row\">
            <h5>INTERFACE DE CREATION D'UNE NOUVELLE ENTREPRISE:</h5>
        </div>
        <!-- BEGIN FORM -->
        <div class=\"row\" id=\"form_row\">
            <!-- BEGIN FORM-->
            {{ form_start(form, {'class': 'horizontal-form'}) }}
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Client</label>
                        {{ form_errors(form.denomination) }}
                        {{ form_widget(form.denomination) }}
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Chargé RH</label>
                        {{ form_errors(form.chargeRecrutement)}}
                        {{ form_widget(form.chargeRecrutement)}}
                    </div>
                </div>
            </div>
             <div class=\"row\">
                 <div class=\"col-lg-4\">
                     <div class=\"form-group\">
                         <label class=\"control-label\">Adresse</label>
                         {{ form_errors(form.adresse) }}
                         {{ form_widget(form.adresse) }}
                     </div>
                 </div>
                 <div class=\"col-lg-2\">
                     <div class=\"form-group\">
                         <label class=\"control-label\">Code Postal</label>
                         {{ form_errors(form.villeCodePostal)}}
                         {{ form_widget(form.villeCodePostal) }}
                     </div>
                 </div>
             </div>
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Ville</label>
                        {{ form_errors(form.ville)}}
                        {{ form_widget(form.ville) }}
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Département</label>
                        {{ form_errors(form.departement)}}
                        {{ form_widget(form.departement) }}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Pays</label>
                        {{ form_errors(form.pays)}}
                        {{ form_widget(form.pays) }}
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Téléphone</label>
                        {{ form_errors(form.telephone)}}
                        {{ form_widget(form.telephone) }}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-2\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Civilite</label>
                        {{ form_errors(form.civilite)}}
                        {{ form_widget(form.civilite) }}
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Nom</label>
                        {{ form_errors(form.nomContact)}}
                        {{ form_widget(form.nomContact) }}
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Prénom</label>
                        {{ form_errors(form.prenomContact)}}
                        {{ form_widget(form.prenomContact) }}
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Fonction du Contact</label>
                        {{ form_errors(form.fonctionContact)}}
                        {{ form_widget(form.fonctionContact) }}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Email</label>
                        {{ form_errors(form.email)}}
                        {{ form_widget(form.email) }}
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Type</label>
                        {{ form_errors(form.typeClient)}}
                        {{ form_widget(form.typeClient ) }}
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Etat</label>
                        {{ form_errors(form.etat)}}
                        {{ form_widget(form.etat) }}
                    </div>
                </div>
                <div class=\"col-lg-2\">
                    <div class=\"form-group\">
                        <div class=\"partenaire\">
                            <label class=\"control-label\">Partenaire</label>
                        </div>
                        {{ form_errors(form.partenaire)}}
                        {{ form_widget(form.partenaire) }}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-11\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Commentaires</label>
                        {{ form_errors(form.commentaire)}}
                        {{ form_widget(form.commentaire) }}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-offset-10\">
                    <button type=\"submit\" class=\"btn  btn-default\"><i class=\"fa fa-check\"></i>Enregister</button>
                </div>
            </div>
            {{ form_end(form) }}
            <!-- END FORM-->
        </div>
    </div>

{% endblock %}", "MALrmBundle:Client:new.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle\\Resources\\views\\Client\\new.html.twig");
    }
}
