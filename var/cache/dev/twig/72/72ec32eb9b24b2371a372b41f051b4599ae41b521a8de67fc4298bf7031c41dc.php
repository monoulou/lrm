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
        $__internal_de28694f21eadb81ad21cbf66aa0df01ded5325f923e84414879442d6fd49d0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de28694f21eadb81ad21cbf66aa0df01ded5325f923e84414879442d6fd49d0a->enter($__internal_de28694f21eadb81ad21cbf66aa0df01ded5325f923e84414879442d6fd49d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Gestion:new.html.twig"));

        $__internal_383aa0022e071bee43a17ef6ec375080d1da2a437c57905de017af76ffe99a85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_383aa0022e071bee43a17ef6ec375080d1da2a437c57905de017af76ffe99a85->enter($__internal_383aa0022e071bee43a17ef6ec375080d1da2a437c57905de017af76ffe99a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Gestion:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de28694f21eadb81ad21cbf66aa0df01ded5325f923e84414879442d6fd49d0a->leave($__internal_de28694f21eadb81ad21cbf66aa0df01ded5325f923e84414879442d6fd49d0a_prof);

        
        $__internal_383aa0022e071bee43a17ef6ec375080d1da2a437c57905de017af76ffe99a85->leave($__internal_383aa0022e071bee43a17ef6ec375080d1da2a437c57905de017af76ffe99a85_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_036a2dafe28349dfbe6e1b1bb1d660963062c68345835df379217336e963f302 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_036a2dafe28349dfbe6e1b1bb1d660963062c68345835df379217336e963f302->enter($__internal_036a2dafe28349dfbe6e1b1bb1d660963062c68345835df379217336e963f302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e6518d4f8a25fa480ca7997d68d6b27d1699c893adc799ac4b56dcafcb8f75c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6518d4f8a25fa480ca7997d68d6b27d1699c893adc799ac4b56dcafcb8f75c5->enter($__internal_e6518d4f8a25fa480ca7997d68d6b27d1699c893adc799ac4b56dcafcb8f75c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_e6518d4f8a25fa480ca7997d68d6b27d1699c893adc799ac4b56dcafcb8f75c5->leave($__internal_e6518d4f8a25fa480ca7997d68d6b27d1699c893adc799ac4b56dcafcb8f75c5_prof);

        
        $__internal_036a2dafe28349dfbe6e1b1bb1d660963062c68345835df379217336e963f302->leave($__internal_036a2dafe28349dfbe6e1b1bb1d660963062c68345835df379217336e963f302_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ffe8c1be45bf579e125c0d1f55f6a77ab5f1b9b72513b5156737d514cfbb6150 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffe8c1be45bf579e125c0d1f55f6a77ab5f1b9b72513b5156737d514cfbb6150->enter($__internal_ffe8c1be45bf579e125c0d1f55f6a77ab5f1b9b72513b5156737d514cfbb6150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bb059e34830c43cf656a073f7df879a7225dca91a4b5f8973f88ed60872e986d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb059e34830c43cf656a073f7df879a7225dca91a4b5f8973f88ed60872e986d->enter($__internal_bb059e34830c43cf656a073f7df879a7225dca91a4b5f8973f88ed60872e986d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ville.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_bb059e34830c43cf656a073f7df879a7225dca91a4b5f8973f88ed60872e986d->leave($__internal_bb059e34830c43cf656a073f7df879a7225dca91a4b5f8973f88ed60872e986d_prof);

        
        $__internal_ffe8c1be45bf579e125c0d1f55f6a77ab5f1b9b72513b5156737d514cfbb6150->leave($__internal_ffe8c1be45bf579e125c0d1f55f6a77ab5f1b9b72513b5156737d514cfbb6150_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_ebd620c18d3b18600cd1140a3cb0d342a80492cd0d678868e06f796a294edc84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebd620c18d3b18600cd1140a3cb0d342a80492cd0d678868e06f796a294edc84->enter($__internal_ebd620c18d3b18600cd1140a3cb0d342a80492cd0d678868e06f796a294edc84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b10a320b4ff9d4d4d67d87628251c502bf6ad548774d5ded1d5d2bb1de64d6f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b10a320b4ff9d4d4d67d87628251c502bf6ad548774d5ded1d5d2bb1de64d6f1->enter($__internal_b10a320b4ff9d4d4d67d87628251c502bf6ad548774d5ded1d5d2bb1de64d6f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            <h5>INTERFACE DE DECLARATION D'UNE OFFRE POURVUE</h5>
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
        
        $__internal_b10a320b4ff9d4d4d67d87628251c502bf6ad548774d5ded1d5d2bb1de64d6f1->leave($__internal_b10a320b4ff9d4d4d67d87628251c502bf6ad548774d5ded1d5d2bb1de64d6f1_prof);

        
        $__internal_ebd620c18d3b18600cd1140a3cb0d342a80492cd0d678868e06f796a294edc84->leave($__internal_ebd620c18d3b18600cd1140a3cb0d342a80492cd0d678868e06f796a294edc84_prof);

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
            <h5>INTERFACE DE DECLARATION D'UNE OFFRE POURVUE</h5>
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
