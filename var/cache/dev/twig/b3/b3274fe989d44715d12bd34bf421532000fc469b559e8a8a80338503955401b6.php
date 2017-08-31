<?php

/* @MALrm/Gestion/new.html.twig */
class __TwigTemplate_2cccb34427daef281e25eede5eb6522ff27edfe29734950be69816ee2f019876 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@MALrm/Gestion/new.html.twig", 1);
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
        $__internal_a9888d5b6962600d889e9b4dc57aed7bbf92ec044d25eab4d8388ac415aae213 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9888d5b6962600d889e9b4dc57aed7bbf92ec044d25eab4d8388ac415aae213->enter($__internal_a9888d5b6962600d889e9b4dc57aed7bbf92ec044d25eab4d8388ac415aae213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MALrm/Gestion/new.html.twig"));

        $__internal_1591505c410c82862776e9ecb4e48ba063eae9753133bc91f932f6c09780929b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1591505c410c82862776e9ecb4e48ba063eae9753133bc91f932f6c09780929b->enter($__internal_1591505c410c82862776e9ecb4e48ba063eae9753133bc91f932f6c09780929b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MALrm/Gestion/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9888d5b6962600d889e9b4dc57aed7bbf92ec044d25eab4d8388ac415aae213->leave($__internal_a9888d5b6962600d889e9b4dc57aed7bbf92ec044d25eab4d8388ac415aae213_prof);

        
        $__internal_1591505c410c82862776e9ecb4e48ba063eae9753133bc91f932f6c09780929b->leave($__internal_1591505c410c82862776e9ecb4e48ba063eae9753133bc91f932f6c09780929b_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1fe7d8077ca20f2142eb1a72241ab140704f5daf187ee147040c339221565789 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fe7d8077ca20f2142eb1a72241ab140704f5daf187ee147040c339221565789->enter($__internal_1fe7d8077ca20f2142eb1a72241ab140704f5daf187ee147040c339221565789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_715925f010545f7dd7629dd701c5318bab65a09f32e30a0a242c67b2d0f64565 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_715925f010545f7dd7629dd701c5318bab65a09f32e30a0a242c67b2d0f64565->enter($__internal_715925f010545f7dd7629dd701c5318bab65a09f32e30a0a242c67b2d0f64565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_715925f010545f7dd7629dd701c5318bab65a09f32e30a0a242c67b2d0f64565->leave($__internal_715925f010545f7dd7629dd701c5318bab65a09f32e30a0a242c67b2d0f64565_prof);

        
        $__internal_1fe7d8077ca20f2142eb1a72241ab140704f5daf187ee147040c339221565789->leave($__internal_1fe7d8077ca20f2142eb1a72241ab140704f5daf187ee147040c339221565789_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aafc30ab8dc9cdc450dd361e76a47963d6613659f8de50c2e9d3200e0ee712c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aafc30ab8dc9cdc450dd361e76a47963d6613659f8de50c2e9d3200e0ee712c1->enter($__internal_aafc30ab8dc9cdc450dd361e76a47963d6613659f8de50c2e9d3200e0ee712c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_66ab8781030e986f868f4c82a6a8c84075ed4fd69aeb5e6af19f323fff9e2b56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66ab8781030e986f868f4c82a6a8c84075ed4fd69aeb5e6af19f323fff9e2b56->enter($__internal_66ab8781030e986f868f4c82a6a8c84075ed4fd69aeb5e6af19f323fff9e2b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ville.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_66ab8781030e986f868f4c82a6a8c84075ed4fd69aeb5e6af19f323fff9e2b56->leave($__internal_66ab8781030e986f868f4c82a6a8c84075ed4fd69aeb5e6af19f323fff9e2b56_prof);

        
        $__internal_aafc30ab8dc9cdc450dd361e76a47963d6613659f8de50c2e9d3200e0ee712c1->leave($__internal_aafc30ab8dc9cdc450dd361e76a47963d6613659f8de50c2e9d3200e0ee712c1_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_d129dc334842a4d992f425d14d6011e292d0dcef2b59eb90a1a2fc069aeb5553 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d129dc334842a4d992f425d14d6011e292d0dcef2b59eb90a1a2fc069aeb5553->enter($__internal_d129dc334842a4d992f425d14d6011e292d0dcef2b59eb90a1a2fc069aeb5553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_95a36e80778b19a307b713583ee0cc87595fe7c5de855bed5b37a2750cc63dd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95a36e80778b19a307b713583ee0cc87595fe7c5de855bed5b37a2750cc63dd3->enter($__internal_95a36e80778b19a307b713583ee0cc87595fe7c5de855bed5b37a2750cc63dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("navbar.html.twig", "@MALrm/Gestion/new.html.twig", 27)->display($context);
        // line 28
        echo "    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    ";
        // line 30
        $this->loadTemplate("sidebar.html.twig", "@MALrm/Gestion/new.html.twig", 30)->display($context);
        // line 31
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
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("class" => "horizontal-form"));
        echo "
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Chargé RH:</label>
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
                        <label class=\"control-label\">Emploi:</label>
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
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Candidat:</label>
                        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "candidat", array()), 'errors');
        echo "
                        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "candidat", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Date d'integration:</label>
                        ";
        // line 71
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateIntegration", array()), 'errors');
        echo "
                        ";
        // line 72
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateIntegration", array()), 'widget');
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
        // line 81
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            <!-- END FORM-->
        </div>
    </div>

";
        
        $__internal_95a36e80778b19a307b713583ee0cc87595fe7c5de855bed5b37a2750cc63dd3->leave($__internal_95a36e80778b19a307b713583ee0cc87595fe7c5de855bed5b37a2750cc63dd3_prof);

        
        $__internal_d129dc334842a4d992f425d14d6011e292d0dcef2b59eb90a1a2fc069aeb5553->leave($__internal_d129dc334842a4d992f425d14d6011e292d0dcef2b59eb90a1a2fc069aeb5553_prof);

    }

    public function getTemplateName()
    {
        return "@MALrm/Gestion/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 81,  203 => 72,  199 => 71,  190 => 65,  186 => 64,  175 => 56,  171 => 55,  162 => 49,  158 => 48,  150 => 43,  136 => 31,  134 => 30,  130 => 28,  128 => 27,  121 => 22,  115 => 20,  107 => 18,  105 => 17,  99 => 13,  90 => 12,  78 => 8,  73 => 7,  64 => 6,  51 => 4,  42 => 3,  11 => 1,);
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
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Chargé RH:</label>
                        {{ form_errors(form.chargeRecrutement) }}
                        {{ form_widget(form.chargeRecrutement) }}
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Emploi:</label>
                        {{ form_errors(form.emploi)}}
                        {{ form_widget(form.emploi)}}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Candidat:</label>
                        {{ form_errors(form.candidat)}}
                        {{ form_widget(form.candidat)}}
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Date d'integration:</label>
                        {{ form_errors(form.dateIntegration) }}
                        {{ form_widget(form.dateIntegration) }}
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

{% endblock %}", "@MALrm/Gestion/new.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle\\Resources\\views\\Gestion\\new.html.twig");
    }
}
