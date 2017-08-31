<?php

/* @MALrm/Client/new.html.twig */
class __TwigTemplate_c2fcaa36b8e148cbb3fa17fafead326deb2990206a05ce2c223f5cb9e30f3c92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@MALrm/Client/new.html.twig", 1);
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
        $__internal_94805a51556957db097a7442db3b4de2481c0a70aa394aeffaef0cc318a7ed1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94805a51556957db097a7442db3b4de2481c0a70aa394aeffaef0cc318a7ed1d->enter($__internal_94805a51556957db097a7442db3b4de2481c0a70aa394aeffaef0cc318a7ed1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MALrm/Client/new.html.twig"));

        $__internal_c8873a4af7244e9140f1de9d42e1fb25bc6d42264cfff228f0341ed7b70231d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8873a4af7244e9140f1de9d42e1fb25bc6d42264cfff228f0341ed7b70231d2->enter($__internal_c8873a4af7244e9140f1de9d42e1fb25bc6d42264cfff228f0341ed7b70231d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MALrm/Client/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94805a51556957db097a7442db3b4de2481c0a70aa394aeffaef0cc318a7ed1d->leave($__internal_94805a51556957db097a7442db3b4de2481c0a70aa394aeffaef0cc318a7ed1d_prof);

        
        $__internal_c8873a4af7244e9140f1de9d42e1fb25bc6d42264cfff228f0341ed7b70231d2->leave($__internal_c8873a4af7244e9140f1de9d42e1fb25bc6d42264cfff228f0341ed7b70231d2_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ca64decbcbc98a3b2d8810bc7a5a86fa464293e8f2b26a7ddc1ca33bc5ed71db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca64decbcbc98a3b2d8810bc7a5a86fa464293e8f2b26a7ddc1ca33bc5ed71db->enter($__internal_ca64decbcbc98a3b2d8810bc7a5a86fa464293e8f2b26a7ddc1ca33bc5ed71db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5fbdf8ee2e8e0e40b29b05a73a7e136631da39da912ccf2f774e464b22c10217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fbdf8ee2e8e0e40b29b05a73a7e136631da39da912ccf2f774e464b22c10217->enter($__internal_5fbdf8ee2e8e0e40b29b05a73a7e136631da39da912ccf2f774e464b22c10217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_5fbdf8ee2e8e0e40b29b05a73a7e136631da39da912ccf2f774e464b22c10217->leave($__internal_5fbdf8ee2e8e0e40b29b05a73a7e136631da39da912ccf2f774e464b22c10217_prof);

        
        $__internal_ca64decbcbc98a3b2d8810bc7a5a86fa464293e8f2b26a7ddc1ca33bc5ed71db->leave($__internal_ca64decbcbc98a3b2d8810bc7a5a86fa464293e8f2b26a7ddc1ca33bc5ed71db_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_acc8ee873157b3afade33f27bfdb16656e6ce079092f19cf37d8120c1acb0610 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acc8ee873157b3afade33f27bfdb16656e6ce079092f19cf37d8120c1acb0610->enter($__internal_acc8ee873157b3afade33f27bfdb16656e6ce079092f19cf37d8120c1acb0610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9b38c7d158e3cb463115229f69b187c7acfab060f00dcc78179e5905b3bd945f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b38c7d158e3cb463115229f69b187c7acfab060f00dcc78179e5905b3bd945f->enter($__internal_9b38c7d158e3cb463115229f69b187c7acfab060f00dcc78179e5905b3bd945f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ville.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_9b38c7d158e3cb463115229f69b187c7acfab060f00dcc78179e5905b3bd945f->leave($__internal_9b38c7d158e3cb463115229f69b187c7acfab060f00dcc78179e5905b3bd945f_prof);

        
        $__internal_acc8ee873157b3afade33f27bfdb16656e6ce079092f19cf37d8120c1acb0610->leave($__internal_acc8ee873157b3afade33f27bfdb16656e6ce079092f19cf37d8120c1acb0610_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_92520aee1a6c1036a4333f4df0d16e86552dbb376fcedb11196c7cdae3c9a609 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92520aee1a6c1036a4333f4df0d16e86552dbb376fcedb11196c7cdae3c9a609->enter($__internal_92520aee1a6c1036a4333f4df0d16e86552dbb376fcedb11196c7cdae3c9a609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a4d84519eee9b20829d86f7efa9510be7cd7b8eb0f9b02673835304f4529412d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4d84519eee9b20829d86f7efa9510be7cd7b8eb0f9b02673835304f4529412d->enter($__internal_a4d84519eee9b20829d86f7efa9510be7cd7b8eb0f9b02673835304f4529412d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("navbar.html.twig", "@MALrm/Client/new.html.twig", 26)->display($context);
        // line 27
        echo "    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    ";
        // line 29
        $this->loadTemplate("sidebar.html.twig", "@MALrm/Client/new.html.twig", 29)->display($context);
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
        
        $__internal_a4d84519eee9b20829d86f7efa9510be7cd7b8eb0f9b02673835304f4529412d->leave($__internal_a4d84519eee9b20829d86f7efa9510be7cd7b8eb0f9b02673835304f4529412d_prof);

        
        $__internal_92520aee1a6c1036a4333f4df0d16e86552dbb376fcedb11196c7cdae3c9a609->leave($__internal_92520aee1a6c1036a4333f4df0d16e86552dbb376fcedb11196c7cdae3c9a609_prof);

    }

    public function getTemplateName()
    {
        return "@MALrm/Client/new.html.twig";
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

{% endblock %}", "@MALrm/Client/new.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle\\Resources\\views\\Client\\new.html.twig");
    }
}
