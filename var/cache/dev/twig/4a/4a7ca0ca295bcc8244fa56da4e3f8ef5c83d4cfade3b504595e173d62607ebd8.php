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
        $__internal_e5d292d9263befae74626146f102b74daa3cf070e4a962fb92f9afb20418556c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5d292d9263befae74626146f102b74daa3cf070e4a962fb92f9afb20418556c->enter($__internal_e5d292d9263befae74626146f102b74daa3cf070e4a962fb92f9afb20418556c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Candidat:new.html.twig"));

        $__internal_8df845f8a099f39b124005abdbfd54f3eab457c2dbcf28ebe35fa8cd5eae9d67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8df845f8a099f39b124005abdbfd54f3eab457c2dbcf28ebe35fa8cd5eae9d67->enter($__internal_8df845f8a099f39b124005abdbfd54f3eab457c2dbcf28ebe35fa8cd5eae9d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Candidat:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5d292d9263befae74626146f102b74daa3cf070e4a962fb92f9afb20418556c->leave($__internal_e5d292d9263befae74626146f102b74daa3cf070e4a962fb92f9afb20418556c_prof);

        
        $__internal_8df845f8a099f39b124005abdbfd54f3eab457c2dbcf28ebe35fa8cd5eae9d67->leave($__internal_8df845f8a099f39b124005abdbfd54f3eab457c2dbcf28ebe35fa8cd5eae9d67_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9a4f43934236b7c1c279aea23e6709d07ae99efe59bb82eac4860be8dd9a9f5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a4f43934236b7c1c279aea23e6709d07ae99efe59bb82eac4860be8dd9a9f5e->enter($__internal_9a4f43934236b7c1c279aea23e6709d07ae99efe59bb82eac4860be8dd9a9f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6eed17fc7a6e9ed21e51f62d3044f3aa8aad73535b27c1a1816873b6f757d00c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eed17fc7a6e9ed21e51f62d3044f3aa8aad73535b27c1a1816873b6f757d00c->enter($__internal_6eed17fc7a6e9ed21e51f62d3044f3aa8aad73535b27c1a1816873b6f757d00c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_6eed17fc7a6e9ed21e51f62d3044f3aa8aad73535b27c1a1816873b6f757d00c->leave($__internal_6eed17fc7a6e9ed21e51f62d3044f3aa8aad73535b27c1a1816873b6f757d00c_prof);

        
        $__internal_9a4f43934236b7c1c279aea23e6709d07ae99efe59bb82eac4860be8dd9a9f5e->leave($__internal_9a4f43934236b7c1c279aea23e6709d07ae99efe59bb82eac4860be8dd9a9f5e_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2541e091055bde87e01ad5d45bb0ccfe57a0f14e288402c143243568df82518c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2541e091055bde87e01ad5d45bb0ccfe57a0f14e288402c143243568df82518c->enter($__internal_2541e091055bde87e01ad5d45bb0ccfe57a0f14e288402c143243568df82518c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_722afb038f5f865b02acd5535c5893d34b979abb5fe071b31cb00186f4803442 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_722afb038f5f865b02acd5535c5893d34b979abb5fe071b31cb00186f4803442->enter($__internal_722afb038f5f865b02acd5535c5893d34b979abb5fe071b31cb00186f4803442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ville.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_722afb038f5f865b02acd5535c5893d34b979abb5fe071b31cb00186f4803442->leave($__internal_722afb038f5f865b02acd5535c5893d34b979abb5fe071b31cb00186f4803442_prof);

        
        $__internal_2541e091055bde87e01ad5d45bb0ccfe57a0f14e288402c143243568df82518c->leave($__internal_2541e091055bde87e01ad5d45bb0ccfe57a0f14e288402c143243568df82518c_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_80cadaec0ff5b429e666b20f5e286eb5073dc3d5d392272e64a47d16668ecff1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80cadaec0ff5b429e666b20f5e286eb5073dc3d5d392272e64a47d16668ecff1->enter($__internal_80cadaec0ff5b429e666b20f5e286eb5073dc3d5d392272e64a47d16668ecff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_da332e72e880ea6c0fdbc99a05b419a60bc8fa55e036f8ce643a6827ef59fd01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da332e72e880ea6c0fdbc99a05b419a60bc8fa55e036f8ce643a6827ef59fd01->enter($__internal_da332e72e880ea6c0fdbc99a05b419a60bc8fa55e036f8ce643a6827ef59fd01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                                    <label class=\"control-label\">Utilisateur</label>
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
                                    <label class=\"control-label\">Offre d'emploi</label>
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
                                    <label class=\"control-label\">Civilité</label>
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
                                    <label class=\"control-label\">Nom</label>
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
                                    <label class=\"control-label\">Prénom</label>
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
                                    <label class=\"control-label\">Adresse</label>
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
                                    <label class=\"control-label\">Code Postal</label>
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
                                    <label class=\"control-label\">Ville</label>
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
                                    <label class=\"control-label\">Département</label>
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
                                    <label class=\"control-label\">Pays</label>
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
                        </div>
                    </div>
                    <div class=\"col-lg-6\" id=\"block_right_candidat\">
                        <div class=\"row\">
                            <div class=\"col-lg-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Date de naissance</label>
                                    ";
        // line 130
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateAnniversaire", array()), 'errors');
        echo "
                                    ";
        // line 131
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateAnniversaire", array()), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"col-lg-2\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Age</label>
                                    ";
        // line 138
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "age", array()), 'errors');
        echo "
                                    ";
        // line 139
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "age", array()), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"col-lg-4\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Test de personnalité</label>
                                    ";
        // line 145
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "testPersonnalite", array()), 'errors');
        echo "
                                    ";
        // line 146
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "testPersonnalite", array()), 'widget');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-lg-5\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Téléphone</label>
                                    ";
        // line 154
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'errors');
        echo "
                                    ";
        // line 155
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"col-lg-7\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Email</label>
                                    ";
        // line 161
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                                    ";
        // line 162
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
        // line 170
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateRelance", array()), 'errors');
        echo "
                                    ";
        // line 171
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateRelance", array()), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"col-lg-5\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">cv<em>(format pdf ou .doc)</em></label>
                                    ";
        // line 177
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cvCandidat", array()), 'errors');
        echo "
                                    ";
        // line 178
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
        // line 186
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'errors');
        echo "
                                    ";
        // line 187
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
        // line 196
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                        <!-- END FORM-->
                    </div>

                </div>
            </div>




";
        
        $__internal_da332e72e880ea6c0fdbc99a05b419a60bc8fa55e036f8ce643a6827ef59fd01->leave($__internal_da332e72e880ea6c0fdbc99a05b419a60bc8fa55e036f8ce643a6827ef59fd01_prof);

        
        $__internal_80cadaec0ff5b429e666b20f5e286eb5073dc3d5d392272e64a47d16668ecff1->leave($__internal_80cadaec0ff5b429e666b20f5e286eb5073dc3d5d392272e64a47d16668ecff1_prof);

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
        return array (  414 => 196,  402 => 187,  398 => 186,  387 => 178,  383 => 177,  374 => 171,  370 => 170,  359 => 162,  355 => 161,  346 => 155,  342 => 154,  331 => 146,  327 => 145,  318 => 139,  313 => 138,  304 => 131,  299 => 130,  286 => 119,  282 => 118,  273 => 112,  269 => 111,  260 => 105,  256 => 104,  245 => 96,  241 => 95,  232 => 89,  228 => 88,  217 => 80,  213 => 79,  204 => 73,  200 => 72,  191 => 66,  187 => 65,  176 => 57,  172 => 56,  163 => 50,  159 => 49,  151 => 44,  136 => 31,  134 => 30,  130 => 28,  128 => 27,  121 => 22,  115 => 20,  107 => 18,  105 => 17,  99 => 13,  90 => 12,  78 => 8,  73 => 7,  64 => 6,  51 => 4,  42 => 3,  11 => 1,);
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
                                    <label class=\"control-label\">Utilisateur</label>
                                    {{ form_errors(form.chargeRecrutement)}}
                                    {{ form_widget(form.chargeRecrutement)}}
                                </div>
                            </div>
                            <div class=\"col-lg-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Offre d'emploi</label>
                                    {{ form_errors(form.emploi)}}
                                    {{ form_widget(form.emploi)}}
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-lg-3\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Civilité</label>
                                    {{ form_errors(form.civilite) }}
                                    {{ form_widget(form.civilite) }}
                                </div>
                            </div>
                            <div class=\"col-lg-5\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Nom</label>
                                    {{ form_errors(form.nom) }}
                                    {{ form_widget(form.nom) }}
                                </div>
                            </div>
                            <div class=\"col-lg-4\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Prénom</label>
                                    {{ form_errors(form.prenom) }}
                                    {{ form_widget(form.prenom) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-lg-8\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Adresse</label>
                                    {{ form_errors(form.adresse) }}
                                    {{ form_widget(form.adresse) }}
                                </div>
                            </div>
                            <div class=\"col-lg-4\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Code Postal</label>
                                    {{ form_errors(form.villeCodePostal)}}
                                    {{ form_widget(form.villeCodePostal) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-lg-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Ville</label>
                                    {{ form_errors(form.ville)}}
                                    {{ form_widget(form.ville) }}
                                </div>
                            </div>
                            <div class=\"col-lg-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Département</label>
                                    {{ form_errors(form.departement)}}
                                    {{ form_widget(form.departement) }}
                                </div>
                            </div>
                            <div class=\"col-lg-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Pays</label>
                                    {{ form_errors(form.pays)}}
                                    {{ form_widget(form.pays) }}
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
                                    <label class=\"control-label\">Téléphone</label>
                                    {{ form_errors(form.telephone)}}
                                    {{ form_widget(form.telephone) }}
                                </div>
                            </div>
                            <div class=\"col-lg-7\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Email</label>
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
