<?php

/* MALrmBundle:Candidat:new.html.twig */
class __TwigTemplate_c1ee4a817c7e5fd731a398d4bd85a246ec56f7b2c8fba12241c00e60f91c5234 extends Twig_Template
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
        $__internal_e647e4cbfe019780bb23ffa7bc2f1c3d6b1403fcf0cb92adccee32e66c9143e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e647e4cbfe019780bb23ffa7bc2f1c3d6b1403fcf0cb92adccee32e66c9143e1->enter($__internal_e647e4cbfe019780bb23ffa7bc2f1c3d6b1403fcf0cb92adccee32e66c9143e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Candidat:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e647e4cbfe019780bb23ffa7bc2f1c3d6b1403fcf0cb92adccee32e66c9143e1->leave($__internal_e647e4cbfe019780bb23ffa7bc2f1c3d6b1403fcf0cb92adccee32e66c9143e1_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5d9d946a0507dac4324683a19a60b1218ffda1b43d2378d03137f1cb64bceb83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d9d946a0507dac4324683a19a60b1218ffda1b43d2378d03137f1cb64bceb83->enter($__internal_5d9d946a0507dac4324683a19a60b1218ffda1b43d2378d03137f1cb64bceb83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_5d9d946a0507dac4324683a19a60b1218ffda1b43d2378d03137f1cb64bceb83->leave($__internal_5d9d946a0507dac4324683a19a60b1218ffda1b43d2378d03137f1cb64bceb83_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_11c2596b71799fd18fe53465ed731f9a2b8d13488c374bf388bbc54118234aad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11c2596b71799fd18fe53465ed731f9a2b8d13488c374bf388bbc54118234aad->enter($__internal_11c2596b71799fd18fe53465ed731f9a2b8d13488c374bf388bbc54118234aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ville.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_11c2596b71799fd18fe53465ed731f9a2b8d13488c374bf388bbc54118234aad->leave($__internal_11c2596b71799fd18fe53465ed731f9a2b8d13488c374bf388bbc54118234aad_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1f0880804ca6aa215a6c3ad5a3c7bb37b1e8d93bc16b1350ed77dbba56d2c47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1f0880804ca6aa215a6c3ad5a3c7bb37b1e8d93bc16b1350ed77dbba56d2c47->enter($__internal_a1f0880804ca6aa215a6c3ad5a3c7bb37b1e8d93bc16b1350ed77dbba56d2c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <div class=\"col-lg-6\" id=\"block_left_candidat\">
                        <!-- BEGIN FORM-->
                        ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("class" => "horizontal-form"));
        echo "
                        <div class=\"row\">
                            <div class=\"col-lg-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Utilisateur <span class=\"star\">*</span></label>
                                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "chargeRecrutement", array()), 'errors');
        echo "
                                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "chargeRecrutement", array()), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"col-lg-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Offre d'emploi <span class=\"star\">*</span></label>
                                    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "emploi", array()), 'errors');
        echo "
                                    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "emploi", array()), 'widget');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-lg-3\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Civilité <span class=\"star\">*</span></label>
                                    ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "civilite", array()), 'errors');
        echo "
                                    ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "civilite", array()), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"col-lg-5\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Nom <span class=\"star\">*</span></label>
                                    ";
        // line 72
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
                                    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"col-lg-4\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Prénom <span class=\"star\">*</span></label>
                                    ";
        // line 79
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'errors');
        echo "
                                    ";
        // line 80
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-lg-8\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Adresse <span class=\"star\">*</span></label>
                                    ";
        // line 88
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'errors');
        echo "
                                    ";
        // line 89
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"col-lg-4\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Code Postal <span class=\"star\">*</span></label>
                                    ";
        // line 95
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "villeCodePostal", array()), 'errors');
        echo "
                                    ";
        // line 96
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "villeCodePostal", array()), 'widget');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-lg-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Ville <span class=\"star\">*</span></label>
                                    ";
        // line 104
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'errors');
        echo "
                                    ";
        // line 105
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"col-lg-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Département <span class=\"star\">*</span></label>
                                    ";
        // line 111
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departement", array()), 'errors');
        echo "
                                    ";
        // line 112
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departement", array()), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"col-lg-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Pays <span class=\"star\">*</span></label>
                                    ";
        // line 118
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'errors');
        echo "
                                    ";
        // line 119
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"col-lg-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Prétentions salariales</label>
                                    ";
        // line 125
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pretention", array()), 'errors');
        echo "
                                    ";
        // line 126
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pretention", array()), 'widget');
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
        // line 137
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateAnniversaire", array()), 'errors');
        echo "
                                    ";
        // line 138
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateAnniversaire", array()), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"col-lg-2\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Age</label>
                                    ";
        // line 145
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "age", array()), 'errors');
        echo "
                                    ";
        // line 146
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "age", array()), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"col-lg-4\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Test de personnalité</label>
                                    ";
        // line 152
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "testPersonnalite", array()), 'errors');
        echo "
                                    ";
        // line 153
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "testPersonnalite", array()), 'widget');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-lg-5\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Téléphone <span class=\"star\">*</span></label>
                                    ";
        // line 161
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'errors');
        echo "
                                    ";
        // line 162
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"col-lg-7\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Email <span class=\"star\">*</span></label>
                                    ";
        // line 168
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                                    ";
        // line 169
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-lg-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Date de relance</label>
                                    ";
        // line 177
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateRelance", array()), 'errors');
        echo "
                                    ";
        // line 178
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateRelance", array()), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"col-lg-5\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">cv<em>(format pdf ou .doc)</em></label>
                                    ";
        // line 184
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cvCandidat", array()), 'errors');
        echo "
                                    ";
        // line 185
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cvCandidat", array()), 'widget');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Commentaires</label>
                                    ";
        // line 193
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'errors');
        echo "
                                    ";
        // line 194
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'widget');
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
        // line 203
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                        <!-- END FORM-->
                    </div>

                </div>
            </div>




";
        
        $__internal_a1f0880804ca6aa215a6c3ad5a3c7bb37b1e8d93bc16b1350ed77dbba56d2c47->leave($__internal_a1f0880804ca6aa215a6c3ad5a3c7bb37b1e8d93bc16b1350ed77dbba56d2c47_prof);

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
        return array (  406 => 203,  394 => 194,  390 => 193,  379 => 185,  375 => 184,  366 => 178,  362 => 177,  351 => 169,  347 => 168,  338 => 162,  334 => 161,  323 => 153,  319 => 152,  310 => 146,  305 => 145,  296 => 138,  291 => 137,  278 => 126,  274 => 125,  265 => 119,  261 => 118,  252 => 112,  248 => 111,  239 => 105,  235 => 104,  224 => 96,  220 => 95,  211 => 89,  207 => 88,  196 => 80,  192 => 79,  183 => 73,  179 => 72,  170 => 66,  166 => 65,  155 => 57,  151 => 56,  142 => 50,  138 => 49,  130 => 44,  115 => 31,  113 => 30,  109 => 28,  107 => 27,  100 => 22,  94 => 20,  86 => 18,  84 => 17,  78 => 13,  72 => 12,  63 => 8,  58 => 7,  52 => 6,  42 => 4,  36 => 3,  11 => 1,);
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
                    <div class=\"col-lg-6\" id=\"block_left_candidat\">
                        <!-- BEGIN FORM-->
                        {{ form_start(form, {'class': 'horizontal-form'}) }}
                        <div class=\"row\">
                            <div class=\"col-lg-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Utilisateur <span class=\"star\">*</span></label>
                                    {{ form_errors(form.chargeRecrutement)}}
                                    {{ form_widget(form.chargeRecrutement)}}
                                </div>
                            </div>
                            <div class=\"col-lg-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Offre d'emploi <span class=\"star\">*</span></label>
                                    {{ form_errors(form.emploi)}}
                                    {{ form_widget(form.emploi)}}
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-lg-3\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Civilité <span class=\"star\">*</span></label>
                                    {{ form_errors(form.civilite) }}
                                    {{ form_widget(form.civilite) }}
                                </div>
                            </div>
                            <div class=\"col-lg-5\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Nom <span class=\"star\">*</span></label>
                                    {{ form_errors(form.nom) }}
                                    {{ form_widget(form.nom) }}
                                </div>
                            </div>
                            <div class=\"col-lg-4\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Prénom <span class=\"star\">*</span></label>
                                    {{ form_errors(form.prenom) }}
                                    {{ form_widget(form.prenom) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-lg-8\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Adresse <span class=\"star\">*</span></label>
                                    {{ form_errors(form.adresse) }}
                                    {{ form_widget(form.adresse) }}
                                </div>
                            </div>
                            <div class=\"col-lg-4\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Code Postal <span class=\"star\">*</span></label>
                                    {{ form_errors(form.villeCodePostal)}}
                                    {{ form_widget(form.villeCodePostal) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-lg-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Ville <span class=\"star\">*</span></label>
                                    {{ form_errors(form.ville)}}
                                    {{ form_widget(form.ville) }}
                                </div>
                            </div>
                            <div class=\"col-lg-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Département <span class=\"star\">*</span></label>
                                    {{ form_errors(form.departement)}}
                                    {{ form_widget(form.departement) }}
                                </div>
                            </div>
                            <div class=\"col-lg-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Pays <span class=\"star\">*</span></label>
                                    {{ form_errors(form.pays)}}
                                    {{ form_widget(form.pays) }}
                                </div>
                            </div>
                            <div class=\"col-lg-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Prétentions salariales</label>
                                    {{ form_errors(form.pretention)}}
                                    {{ form_widget(form.pretention) }}
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
                                    {{ form_errors(form.dateAnniversaire) }}
                                    {{ form_widget(form.dateAnniversaire) }}
                                </div>
                            </div>
                            <div class=\"col-lg-2\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Age</label>
                                    {#<input  class=\"form-control\" type=\"text\" name=\"ma_lrmbundle_candidat[age]\" id=\"ma_lrmbundle_candidat_age\" />#}
                                    {{ form_errors(form.age) }}
                                    {{ form_widget(form.age) }}
                                </div>
                            </div>
                            <div class=\"col-lg-4\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Test de personnalité</label>
                                    {{ form_errors(form.testPersonnalite) }}
                                    {{ form_widget(form.testPersonnalite) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-lg-5\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Téléphone <span class=\"star\">*</span></label>
                                    {{ form_errors(form.telephone)}}
                                    {{ form_widget(form.telephone) }}
                                </div>
                            </div>
                            <div class=\"col-lg-7\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Email <span class=\"star\">*</span></label>
                                    {{ form_errors(form.email)}}
                                    {{ form_widget(form.email) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-lg-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Date de relance</label>
                                    {{ form_errors(form.dateRelance) }}
                                    {{ form_widget(form.dateRelance) }}
                                </div>
                            </div>
                            <div class=\"col-lg-5\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">cv<em>(format pdf ou .doc)</em></label>
                                    {{ form_errors(form.cvCandidat) }}
                                    {{ form_widget(form.cvCandidat) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Commentaires</label>
                                    {{ form_errors(form.commentaire)}}
                                    {{ form_widget(form.commentaire) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-lg-offset-7 col-lg-5\">
                                <button type=\"submit\" style=\"width: 100%;\" class=\"btn  btn-default\"><i class=\"fa fa-check\"></i>Enregister</button>
                            </div>
                        </div>
                        {{ form_end(form) }}
                        <!-- END FORM-->
                    </div>

                </div>
            </div>




{% endblock %}", "MALrmBundle:Candidat:new.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle/Resources/views/Candidat/new.html.twig");
    }
}
