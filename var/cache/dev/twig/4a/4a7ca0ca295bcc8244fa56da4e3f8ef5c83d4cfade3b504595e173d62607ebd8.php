<?php

/* MALrmBundle:Candidat:new.html.twig */
class __TwigTemplate_ee2db69eace38c64c64b46aeb3d3d4268e36d2c7ae5d45e66a94c18146f93a56 extends Twig_Template
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
        $__internal_64144267c940c19ac386e30aa1f627ffe97890b19d23f02d3fef6475419e6b98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64144267c940c19ac386e30aa1f627ffe97890b19d23f02d3fef6475419e6b98->enter($__internal_64144267c940c19ac386e30aa1f627ffe97890b19d23f02d3fef6475419e6b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Candidat:new.html.twig"));

        $__internal_d6149b29d5a61133cd27056ffd1e40f22dc6a0d2b0dd6a4ff882a430bbe80573 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6149b29d5a61133cd27056ffd1e40f22dc6a0d2b0dd6a4ff882a430bbe80573->enter($__internal_d6149b29d5a61133cd27056ffd1e40f22dc6a0d2b0dd6a4ff882a430bbe80573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Candidat:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64144267c940c19ac386e30aa1f627ffe97890b19d23f02d3fef6475419e6b98->leave($__internal_64144267c940c19ac386e30aa1f627ffe97890b19d23f02d3fef6475419e6b98_prof);

        
        $__internal_d6149b29d5a61133cd27056ffd1e40f22dc6a0d2b0dd6a4ff882a430bbe80573->leave($__internal_d6149b29d5a61133cd27056ffd1e40f22dc6a0d2b0dd6a4ff882a430bbe80573_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_eec4666703929a3af78eb1b661f0d9d6238d99b424dd507761eca734321c3bca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eec4666703929a3af78eb1b661f0d9d6238d99b424dd507761eca734321c3bca->enter($__internal_eec4666703929a3af78eb1b661f0d9d6238d99b424dd507761eca734321c3bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6d0632ca1bb7aa55b0b9861d026e1e85a5129e037b718ab05c931ba8ca42c043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d0632ca1bb7aa55b0b9861d026e1e85a5129e037b718ab05c931ba8ca42c043->enter($__internal_6d0632ca1bb7aa55b0b9861d026e1e85a5129e037b718ab05c931ba8ca42c043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_6d0632ca1bb7aa55b0b9861d026e1e85a5129e037b718ab05c931ba8ca42c043->leave($__internal_6d0632ca1bb7aa55b0b9861d026e1e85a5129e037b718ab05c931ba8ca42c043_prof);

        
        $__internal_eec4666703929a3af78eb1b661f0d9d6238d99b424dd507761eca734321c3bca->leave($__internal_eec4666703929a3af78eb1b661f0d9d6238d99b424dd507761eca734321c3bca_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3bc4fb08086ee509f5dd6251ff28e843e02799abf347ee0cc3461dbf4a5c7b8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bc4fb08086ee509f5dd6251ff28e843e02799abf347ee0cc3461dbf4a5c7b8d->enter($__internal_3bc4fb08086ee509f5dd6251ff28e843e02799abf347ee0cc3461dbf4a5c7b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a2c5c0ac539cb8d35422ae6228e943e35e6a25502f883eeb6025fb192d9a87dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2c5c0ac539cb8d35422ae6228e943e35e6a25502f883eeb6025fb192d9a87dc->enter($__internal_a2c5c0ac539cb8d35422ae6228e943e35e6a25502f883eeb6025fb192d9a87dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ville.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_a2c5c0ac539cb8d35422ae6228e943e35e6a25502f883eeb6025fb192d9a87dc->leave($__internal_a2c5c0ac539cb8d35422ae6228e943e35e6a25502f883eeb6025fb192d9a87dc_prof);

        
        $__internal_3bc4fb08086ee509f5dd6251ff28e843e02799abf347ee0cc3461dbf4a5c7b8d->leave($__internal_3bc4fb08086ee509f5dd6251ff28e843e02799abf347ee0cc3461dbf4a5c7b8d_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2e7c9b048b89ce000ac7e9b4a6dd59729910ae78d9b59a0f46fc844cfde3018 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2e7c9b048b89ce000ac7e9b4a6dd59729910ae78d9b59a0f46fc844cfde3018->enter($__internal_d2e7c9b048b89ce000ac7e9b4a6dd59729910ae78d9b59a0f46fc844cfde3018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_089e4b8a164a1e839b0b40d5a96299fefda683172e602328c2af327b5e1e7d77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_089e4b8a164a1e839b0b40d5a96299fefda683172e602328c2af327b5e1e7d77->enter($__internal_089e4b8a164a1e839b0b40d5a96299fefda683172e602328c2af327b5e1e7d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "
    <div class=\"container-fluid\" id=\"header_container\">
        <div class=\"row\">
            <div class=\"col-lg-2\" style=\"margin-left: -120px\">
                ";
        // line 17
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 18
            echo "                    <i class=\"material-icons\">person</i> Bonjour, ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
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
            <div class=\"col-lg-offset-11\" style=\"padding-top: 10px\" id=\"logout\"><a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"><i class=\"material-icons\">input</i></a></div>
        </div>
    </div>
    <div class=\"container-fluid\" id=\"main_container\">
    <!-- START TOP NAVBAR-->
    ";
        // line 28
        $this->loadTemplate("navbar.html.twig", "MALrmBundle:Candidat:new.html.twig", 28)->display($context);
        // line 29
        echo "    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    ";
        // line 31
        $this->loadTemplate("sidebar.html.twig", "MALrmBundle:Candidat:new.html.twig", 31)->display($context);
        // line 32
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
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("class" => "horizontal-form"));
        echo "
                        <div class=\"row\">
                            <div class=\"col-lg-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Utilisateur <span class=\"star\">*</span></label>
                                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "chargeRecrutement", array()), 'errors');
        echo "
                                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "chargeRecrutement", array()), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"col-lg-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Offre d'emploi <span class=\"star\">*</span></label>
                                    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "emploi", array()), 'errors');
        echo "
                                    ";
        // line 58
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
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "civilite", array()), 'errors');
        echo "
                                    ";
        // line 67
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "civilite", array()), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"col-lg-5\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Nom <span class=\"star\">*</span></label>
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
                            <div class=\"col-lg-4\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Prénom <span class=\"star\">*</span></label>
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
                            <div class=\"col-lg-8\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Adresse <span class=\"star\">*</span></label>
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
                            <div class=\"col-lg-4\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Code Postal <span class=\"star\">*</span></label>
                                    ";
        // line 96
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "villeCodePostal", array()), 'errors');
        echo "
                                    ";
        // line 97
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
        // line 105
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'errors');
        echo "
                                    ";
        // line 106
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"col-lg-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Département <span class=\"star\">*</span></label>
                                    ";
        // line 112
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departement", array()), 'errors');
        echo "
                                    ";
        // line 113
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departement", array()), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"col-lg-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Pays <span class=\"star\">*</span></label>
                                    ";
        // line 119
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'errors');
        echo "
                                    ";
        // line 120
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"col-lg-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Prétentions salariales</label>
                                    ";
        // line 126
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pretention", array()), 'errors');
        echo "
                                    ";
        // line 127
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
        // line 138
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateAnniversaire", array()), 'errors');
        echo "
                                    ";
        // line 139
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateAnniversaire", array()), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"col-lg-2\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Age</label>
                                    ";
        // line 146
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "age", array()), 'errors');
        echo "
                                    ";
        // line 147
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "age", array()), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"col-lg-4\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Test de personnalité</label>
                                    ";
        // line 153
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "testPersonnalite", array()), 'errors');
        echo "
                                    ";
        // line 154
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
        // line 162
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'errors');
        echo "
                                    ";
        // line 163
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"col-lg-7\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Email <span class=\"star\">*</span></label>
                                    ";
        // line 169
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                                    ";
        // line 170
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
        // line 178
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateRelance", array()), 'errors');
        echo "
                                    ";
        // line 179
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateRelance", array()), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"col-lg-5\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">cv<em>(format pdf ou .doc)</em></label>
                                    ";
        // line 185
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cvCandidat", array()), 'errors');
        echo "
                                    ";
        // line 186
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
        // line 194
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'errors');
        echo "
                                    ";
        // line 195
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
        // line 204
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                        <!-- END FORM-->
                    </div>

                </div>
            </div>




";
        
        $__internal_089e4b8a164a1e839b0b40d5a96299fefda683172e602328c2af327b5e1e7d77->leave($__internal_089e4b8a164a1e839b0b40d5a96299fefda683172e602328c2af327b5e1e7d77_prof);

        
        $__internal_d2e7c9b048b89ce000ac7e9b4a6dd59729910ae78d9b59a0f46fc844cfde3018->leave($__internal_d2e7c9b048b89ce000ac7e9b4a6dd59729910ae78d9b59a0f46fc844cfde3018_prof);

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
        return array (  429 => 204,  417 => 195,  413 => 194,  402 => 186,  398 => 185,  389 => 179,  385 => 178,  374 => 170,  370 => 169,  361 => 163,  357 => 162,  346 => 154,  342 => 153,  333 => 147,  328 => 146,  319 => 139,  314 => 138,  301 => 127,  297 => 126,  288 => 120,  284 => 119,  275 => 113,  271 => 112,  262 => 106,  258 => 105,  247 => 97,  243 => 96,  234 => 90,  230 => 89,  219 => 81,  215 => 80,  206 => 74,  202 => 73,  193 => 67,  189 => 66,  178 => 58,  174 => 57,  165 => 51,  161 => 50,  153 => 45,  138 => 32,  136 => 31,  132 => 29,  130 => 28,  122 => 23,  119 => 22,  113 => 20,  107 => 18,  105 => 17,  99 => 13,  90 => 12,  78 => 8,  73 => 7,  64 => 6,  51 => 4,  42 => 3,  11 => 1,);
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
