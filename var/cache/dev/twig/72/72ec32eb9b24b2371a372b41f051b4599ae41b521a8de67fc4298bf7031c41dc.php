<?php

/* MALrmBundle:Gestion:new.html.twig */
class __TwigTemplate_e47cd241eafa8197bf989be2602ae53dc711797314e100f121830d237fd46bdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MALrmBundle:Gestion:new.html.twig", 1);
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
        $__internal_29aa31628b3a3820b29c7cf26b91ef839bc51966dfd6660621b1ea1559f9f6da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29aa31628b3a3820b29c7cf26b91ef839bc51966dfd6660621b1ea1559f9f6da->enter($__internal_29aa31628b3a3820b29c7cf26b91ef839bc51966dfd6660621b1ea1559f9f6da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Gestion:new.html.twig"));

        $__internal_fa92237890c117c40f6aaece3020b3c2342c4e7ee3ea5c66bf8015404f0e7e98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa92237890c117c40f6aaece3020b3c2342c4e7ee3ea5c66bf8015404f0e7e98->enter($__internal_fa92237890c117c40f6aaece3020b3c2342c4e7ee3ea5c66bf8015404f0e7e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Gestion:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29aa31628b3a3820b29c7cf26b91ef839bc51966dfd6660621b1ea1559f9f6da->leave($__internal_29aa31628b3a3820b29c7cf26b91ef839bc51966dfd6660621b1ea1559f9f6da_prof);

        
        $__internal_fa92237890c117c40f6aaece3020b3c2342c4e7ee3ea5c66bf8015404f0e7e98->leave($__internal_fa92237890c117c40f6aaece3020b3c2342c4e7ee3ea5c66bf8015404f0e7e98_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_164ccc40db99fef74883f2ac308c76a3ed6b5aa509ad250b8e396d05238d6af1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_164ccc40db99fef74883f2ac308c76a3ed6b5aa509ad250b8e396d05238d6af1->enter($__internal_164ccc40db99fef74883f2ac308c76a3ed6b5aa509ad250b8e396d05238d6af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_356eefd16b70280a6ea40bc231c07cf239aa9a657ba59939900cf75432867708 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_356eefd16b70280a6ea40bc231c07cf239aa9a657ba59939900cf75432867708->enter($__internal_356eefd16b70280a6ea40bc231c07cf239aa9a657ba59939900cf75432867708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_356eefd16b70280a6ea40bc231c07cf239aa9a657ba59939900cf75432867708->leave($__internal_356eefd16b70280a6ea40bc231c07cf239aa9a657ba59939900cf75432867708_prof);

        
        $__internal_164ccc40db99fef74883f2ac308c76a3ed6b5aa509ad250b8e396d05238d6af1->leave($__internal_164ccc40db99fef74883f2ac308c76a3ed6b5aa509ad250b8e396d05238d6af1_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6212e2649153ee789ba1437298fef87800980282467e16bd64e7313d679b1f61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6212e2649153ee789ba1437298fef87800980282467e16bd64e7313d679b1f61->enter($__internal_6212e2649153ee789ba1437298fef87800980282467e16bd64e7313d679b1f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_57ff0cb65696512aa0ae4998d0da45b20da543dd119eb2b1654aba4c9f25d52f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57ff0cb65696512aa0ae4998d0da45b20da543dd119eb2b1654aba4c9f25d52f->enter($__internal_57ff0cb65696512aa0ae4998d0da45b20da543dd119eb2b1654aba4c9f25d52f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ville.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_57ff0cb65696512aa0ae4998d0da45b20da543dd119eb2b1654aba4c9f25d52f->leave($__internal_57ff0cb65696512aa0ae4998d0da45b20da543dd119eb2b1654aba4c9f25d52f_prof);

        
        $__internal_6212e2649153ee789ba1437298fef87800980282467e16bd64e7313d679b1f61->leave($__internal_6212e2649153ee789ba1437298fef87800980282467e16bd64e7313d679b1f61_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_a559bcb0e6ca22f03c29a94aca7d3eeee514c34f23fa04b4a433da9950018349 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a559bcb0e6ca22f03c29a94aca7d3eeee514c34f23fa04b4a433da9950018349->enter($__internal_a559bcb0e6ca22f03c29a94aca7d3eeee514c34f23fa04b4a433da9950018349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9aa83bb1dbc0e3321201ae1323a009bb2a1e6997100f84e2908f0ba1314fc23b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aa83bb1dbc0e3321201ae1323a009bb2a1e6997100f84e2908f0ba1314fc23b->enter($__internal_9aa83bb1dbc0e3321201ae1323a009bb2a1e6997100f84e2908f0ba1314fc23b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("navbar.html.twig", "MALrmBundle:Gestion:new.html.twig", 28)->display($context);
        // line 29
        echo "    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    ";
        // line 31
        $this->loadTemplate("sidebar.html.twig", "MALrmBundle:Gestion:new.html.twig", 31)->display($context);
        // line 32
        echo "    <!-- END SIDEBAR-->

    <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
        <div class=\"row\">
            <h3>POURVOIR UNE OFFRE</h3><hr style=\"border: 1px solid darkgray;\">
        </div>
        <div class=\"row\" id=\"head_row\">
            <h5>INTERFACE DE DECLARATION D'UNE OFFRE POURVUE:</h5>
        </div>
        <!-- BEGIN FORM -->
        <div class=\"row\" id=\"form_row\">
            <!-- BEGIN FORM-->
            ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("class" => "horizontal-form"));
        echo "
            <div class=\"row\">
                <div class=\"col-lg-offset-3 col-lg-3\">
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
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Emploi <span class=\"star\">*</span></label>
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
                <div class=\"col-lg-offset-3 col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Candidat <span class=\"star\">*</span></label>
                        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "candidat", array()), 'errors');
        echo "
                        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "candidat", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Date d'integration <span class=\"star\">*</span></label>
                        ";
        // line 72
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateIntegration", array()), 'errors');
        echo "
                        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateIntegration", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-offset-7 col-lg-2\">
                    <button type=\"submit\" style=\"width: 100%\" class=\"btn  btn-default\"><i class=\"fa fa-check\"></i>Enregister</button>
                </div>
            </div>
            ";
        // line 82
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            <!-- END FORM-->
        </div>
    </div>

";
        
        $__internal_9aa83bb1dbc0e3321201ae1323a009bb2a1e6997100f84e2908f0ba1314fc23b->leave($__internal_9aa83bb1dbc0e3321201ae1323a009bb2a1e6997100f84e2908f0ba1314fc23b_prof);

        
        $__internal_a559bcb0e6ca22f03c29a94aca7d3eeee514c34f23fa04b4a433da9950018349->leave($__internal_a559bcb0e6ca22f03c29a94aca7d3eeee514c34f23fa04b4a433da9950018349_prof);

    }

    public function getTemplateName()
    {
        return "MALrmBundle:Gestion:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 82,  205 => 73,  201 => 72,  192 => 66,  188 => 65,  177 => 57,  173 => 56,  164 => 50,  160 => 49,  152 => 44,  138 => 32,  136 => 31,  132 => 29,  130 => 28,  122 => 23,  119 => 22,  113 => 20,  107 => 18,  105 => 17,  99 => 13,  90 => 12,  78 => 8,  73 => 7,  64 => 6,  51 => 4,  42 => 3,  11 => 1,);
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
            <h3>POURVOIR UNE OFFRE</h3><hr style=\"border: 1px solid darkgray;\">
        </div>
        <div class=\"row\" id=\"head_row\">
            <h5>INTERFACE DE DECLARATION D'UNE OFFRE POURVUE:</h5>
        </div>
        <!-- BEGIN FORM -->
        <div class=\"row\" id=\"form_row\">
            <!-- BEGIN FORM-->
            {{ form_start(form, {'class': 'horizontal-form'}) }}
            <div class=\"row\">
                <div class=\"col-lg-offset-3 col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Utilisateur <span class=\"star\">*</span></label>
                        {{ form_errors(form.chargeRecrutement) }}
                        {{ form_widget(form.chargeRecrutement) }}
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Emploi <span class=\"star\">*</span></label>
                        {{ form_errors(form.emploi)}}
                        {{ form_widget(form.emploi)}}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-offset-3 col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Candidat <span class=\"star\">*</span></label>
                        {{ form_errors(form.candidat)}}
                        {{ form_widget(form.candidat)}}
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Date d'integration <span class=\"star\">*</span></label>
                        {{ form_errors(form.dateIntegration) }}
                        {{ form_widget(form.dateIntegration) }}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-offset-7 col-lg-2\">
                    <button type=\"submit\" style=\"width: 100%\" class=\"btn  btn-default\"><i class=\"fa fa-check\"></i>Enregister</button>
                </div>
            </div>
            {{ form_end(form) }}
            <!-- END FORM-->
        </div>
    </div>

{% endblock %}", "MALrmBundle:Gestion:new.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle/Resources/views/Gestion/new.html.twig");
    }
}
