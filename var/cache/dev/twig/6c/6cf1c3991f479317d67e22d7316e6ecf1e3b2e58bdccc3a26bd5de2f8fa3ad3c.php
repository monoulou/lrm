<?php

/* MALrmBundle:Candidat:new.html.twig */
class __TwigTemplate_64c4c236590b8947aa949dc1ab6e1d1d1f9d5dbea97e9830b465ba0263df8b59 extends Twig_Template
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
        $__internal_b460f6bea3dc51d38d8e454bc4cd95f498d14a9f3f925da19c6aa8334c8df5ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b460f6bea3dc51d38d8e454bc4cd95f498d14a9f3f925da19c6aa8334c8df5ea->enter($__internal_b460f6bea3dc51d38d8e454bc4cd95f498d14a9f3f925da19c6aa8334c8df5ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Candidat:new.html.twig"));

        $__internal_4b4b83b033a9ae8a796dd023c0804b3821078a1f6e061c933acb7ffa3dc26640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b4b83b033a9ae8a796dd023c0804b3821078a1f6e061c933acb7ffa3dc26640->enter($__internal_4b4b83b033a9ae8a796dd023c0804b3821078a1f6e061c933acb7ffa3dc26640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Candidat:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b460f6bea3dc51d38d8e454bc4cd95f498d14a9f3f925da19c6aa8334c8df5ea->leave($__internal_b460f6bea3dc51d38d8e454bc4cd95f498d14a9f3f925da19c6aa8334c8df5ea_prof);

        
        $__internal_4b4b83b033a9ae8a796dd023c0804b3821078a1f6e061c933acb7ffa3dc26640->leave($__internal_4b4b83b033a9ae8a796dd023c0804b3821078a1f6e061c933acb7ffa3dc26640_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_28bc775f0f41d9a741f9b52740ed18301734f0d02994fab86a20a03f5f5f721c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28bc775f0f41d9a741f9b52740ed18301734f0d02994fab86a20a03f5f5f721c->enter($__internal_28bc775f0f41d9a741f9b52740ed18301734f0d02994fab86a20a03f5f5f721c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b98c7ab445ab94e88c2ba6242afcd93201c72e1a8a52405c165ebc184bcb4a64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b98c7ab445ab94e88c2ba6242afcd93201c72e1a8a52405c165ebc184bcb4a64->enter($__internal_b98c7ab445ab94e88c2ba6242afcd93201c72e1a8a52405c165ebc184bcb4a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_b98c7ab445ab94e88c2ba6242afcd93201c72e1a8a52405c165ebc184bcb4a64->leave($__internal_b98c7ab445ab94e88c2ba6242afcd93201c72e1a8a52405c165ebc184bcb4a64_prof);

        
        $__internal_28bc775f0f41d9a741f9b52740ed18301734f0d02994fab86a20a03f5f5f721c->leave($__internal_28bc775f0f41d9a741f9b52740ed18301734f0d02994fab86a20a03f5f5f721c_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8f1651a9d9864aceefa113748ccb81f33d2aaee9116a83335c07915c6265fbb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f1651a9d9864aceefa113748ccb81f33d2aaee9116a83335c07915c6265fbb1->enter($__internal_8f1651a9d9864aceefa113748ccb81f33d2aaee9116a83335c07915c6265fbb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_43d3b8650f138632472e90da4e2f21dfd3cd3f89c0c837273b4b95d149c86aa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43d3b8650f138632472e90da4e2f21dfd3cd3f89c0c837273b4b95d149c86aa4->enter($__internal_43d3b8650f138632472e90da4e2f21dfd3cd3f89c0c837273b4b95d149c86aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ville.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_43d3b8650f138632472e90da4e2f21dfd3cd3f89c0c837273b4b95d149c86aa4->leave($__internal_43d3b8650f138632472e90da4e2f21dfd3cd3f89c0c837273b4b95d149c86aa4_prof);

        
        $__internal_8f1651a9d9864aceefa113748ccb81f33d2aaee9116a83335c07915c6265fbb1->leave($__internal_8f1651a9d9864aceefa113748ccb81f33d2aaee9116a83335c07915c6265fbb1_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_4304eaf506f26a6853b42500dfae0133d55739b21fa10a50c1a66c06008796f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4304eaf506f26a6853b42500dfae0133d55739b21fa10a50c1a66c06008796f8->enter($__internal_4304eaf506f26a6853b42500dfae0133d55739b21fa10a50c1a66c06008796f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3d9e5f3996f0faf43ff64544101124bbd7785ff0a27e9856d47aa18fe5fac61d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d9e5f3996f0faf43ff64544101124bbd7785ff0a27e9856d47aa18fe5fac61d->enter($__internal_3d9e5f3996f0faf43ff64544101124bbd7785ff0a27e9856d47aa18fe5fac61d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "
    <div class=\"container-fluid\" id=\"header_container\">
        <div class=\"row\">
            <div class=\"col-lg-offset-9\">
                ";
        // line 17
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 18
            echo "                    Connecté en tant que ";
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
            <!-- BEGIN FORM-->
            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("class" => "horizontal-form"));
        echo "
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Chargé RH</label>
                        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "chargeRecrutement", array()), 'errors');
        echo "
                        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "chargeRecrutement", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Offre d'emploi:</label>
                        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "emploi", array()), 'errors');
        echo "
                        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "emploi", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-2\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Civilité:</label>
                        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "civilite", array()), 'errors');
        echo "
                        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "civilite", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Nom</label>
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
                <div class=\"col-lg-2\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Prénom:</label>
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
                <div class=\"col-lg-5\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Adresse:</label>
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
            </div>
            <div class=\"row\">
                <div class=\"col-lg-2\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Code Postal</label>
                        ";
        // line 98
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "villeCodePostal", array()), 'errors');
        echo "
                        ";
        // line 99
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "villeCodePostal", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Ville</label>
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
            </div>
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Département</label>
                        ";
        // line 114
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departement", array()), 'errors');
        echo "
                        ";
        // line 115
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departement", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Pays</label>
                        ";
        // line 121
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'errors');
        echo "
                        ";
        // line 122
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-2\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Date de naissance:</label>
                        ";
        // line 131
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateAnniversaire", array()), 'errors');
        echo "
                        ";
        // line 132
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateAnniversaire", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-1\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Age:</label>
                        ";
        // line 139
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "age", array()), 'errors');
        echo "
                        ";
        // line 140
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "age", array()), 'widget');
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'errors');
        echo "
                        ";
        // line 149
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Email</label>
                        ";
        // line 155
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                        ";
        // line 156
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-2\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Test de personnalité:</label>
                        ";
        // line 164
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "testPersonnalite", array()), 'errors');
        echo "
                        ";
        // line 165
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "testPersonnalite", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-2\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Date de relance:</label>
                        ";
        // line 171
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateRelance", array()), 'errors');
        echo "
                        ";
        // line 172
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateRelance", array()), 'widget');
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cvCandidat", array()), 'errors');
        echo "
                        ";
        // line 181
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cvCandidat", array()), 'widget');
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'errors');
        echo "
                        ";
        // line 190
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'widget');
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            <!-- END FORM-->
        </div>
    </div>

";
        
        $__internal_3d9e5f3996f0faf43ff64544101124bbd7785ff0a27e9856d47aa18fe5fac61d->leave($__internal_3d9e5f3996f0faf43ff64544101124bbd7785ff0a27e9856d47aa18fe5fac61d_prof);

        
        $__internal_4304eaf506f26a6853b42500dfae0133d55739b21fa10a50c1a66c06008796f8->leave($__internal_4304eaf506f26a6853b42500dfae0133d55739b21fa10a50c1a66c06008796f8_prof);

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
        return array (  417 => 199,  405 => 190,  401 => 189,  390 => 181,  386 => 180,  375 => 172,  371 => 171,  362 => 165,  358 => 164,  347 => 156,  343 => 155,  334 => 149,  330 => 148,  319 => 140,  314 => 139,  305 => 132,  300 => 131,  289 => 122,  285 => 121,  276 => 115,  272 => 114,  261 => 106,  257 => 105,  248 => 99,  244 => 98,  233 => 90,  229 => 89,  218 => 81,  214 => 80,  205 => 74,  201 => 73,  190 => 65,  186 => 64,  175 => 56,  171 => 55,  162 => 49,  158 => 48,  150 => 43,  136 => 31,  134 => 30,  130 => 28,  128 => 27,  121 => 22,  115 => 20,  107 => 18,  105 => 17,  99 => 13,  90 => 12,  78 => 8,  73 => 7,  64 => 6,  51 => 4,  42 => 3,  11 => 1,);
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
            <h3>AJOUTER UN CANDIDAT</h3><hr style=\"border: 1px solid darkgray;\">
        </div>
        <div class=\"row\" id=\"head_row\">
            <h5>INTERFACE DE CREATION D'UNE NOUVEAU CANDIDAT:</h5>
        </div>
        <!-- BEGIN FORM -->
        <div class=\"row\" id=\"form_row\">
            <!-- BEGIN FORM-->
            {{ form_start(form, {'class': 'horizontal-form'}) }}
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Chargé RH</label>
                        {{ form_errors(form.chargeRecrutement)}}
                        {{ form_widget(form.chargeRecrutement)}}
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Offre d'emploi:</label>
                        {{ form_errors(form.emploi)}}
                        {{ form_widget(form.emploi)}}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-2\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Civilité:</label>
                        {{ form_errors(form.civilite) }}
                        {{ form_widget(form.civilite) }}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Nom</label>
                        {{ form_errors(form.nom) }}
                        {{ form_widget(form.nom) }}
                    </div>
                </div>
                <div class=\"col-lg-2\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Prénom:</label>
                        {{ form_errors(form.prenom) }}
                        {{ form_widget(form.prenom) }}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-5\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Adresse:</label>
                        {{ form_errors(form.adresse) }}
                        {{ form_widget(form.adresse) }}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-2\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Code Postal</label>
                        {{ form_errors(form.villeCodePostal)}}
                        {{ form_widget(form.villeCodePostal) }}
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Ville</label>
                        {{ form_errors(form.ville)}}
                        {{ form_widget(form.ville) }}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Département</label>
                        {{ form_errors(form.departement)}}
                        {{ form_widget(form.departement) }}
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Pays</label>
                        {{ form_errors(form.pays)}}
                        {{ form_widget(form.pays) }}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-2\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Date de naissance:</label>
                        {#<input  class=\"form-control\" type=\"text\" name=\"ma_lrmbundle_candidat[dateAnniversaire]\" id=\"ma_lrmbundle_candidat_dateAnniversaire\" />#}
                        {{ form_errors(form.dateAnniversaire) }}
                        {{ form_widget(form.dateAnniversaire) }}
                    </div>
                </div>
                <div class=\"col-lg-1\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Age:</label>
                        {#<input  class=\"form-control\" type=\"text\" name=\"ma_lrmbundle_candidat[age]\" id=\"ma_lrmbundle_candidat_age\" />#}
                        {{ form_errors(form.age) }}
                        {{ form_widget(form.age) }}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-2\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Téléphone</label>
                        {{ form_errors(form.telephone)}}
                        {{ form_widget(form.telephone) }}
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Email</label>
                        {{ form_errors(form.email)}}
                        {{ form_widget(form.email) }}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-2\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Test de personnalité:</label>
                        {{ form_errors(form.testPersonnalite) }}
                        {{ form_widget(form.testPersonnalite) }}
                    </div>
                </div>
                <div class=\"col-lg-2\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Date de relance:</label>
                        {{ form_errors(form.dateRelance) }}
                        {{ form_widget(form.dateRelance) }}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">cv:</label>
                        {{ form_errors(form.cvCandidat) }}
                        {{ form_widget(form.cvCandidat) }}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Commentaires</label>
                        {{ form_errors(form.commentaire)}}
                        {{ form_widget(form.commentaire) }}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-offset-5\">
                    <button type=\"submit\" class=\"btn  btn-default\"><i class=\"fa fa-check\"></i>Enregister</button>
                </div>
            </div>
            {{ form_end(form) }}
            <!-- END FORM-->
        </div>
    </div>

{% endblock %}", "MALrmBundle:Candidat:new.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle\\Resources\\views\\Candidat\\new.html.twig");
    }
}
