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
        $__internal_a10fa383008e055801bdd73bcb725cc4aa3fe1c4d9b57930567f99fffd39b078 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a10fa383008e055801bdd73bcb725cc4aa3fe1c4d9b57930567f99fffd39b078->enter($__internal_a10fa383008e055801bdd73bcb725cc4aa3fe1c4d9b57930567f99fffd39b078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MALrm/Gestion/new.html.twig"));

        $__internal_90a035bbe7aea78dfa37a0fd933d3ce48dec47a4dcf016fb0b02b54177b6ec34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90a035bbe7aea78dfa37a0fd933d3ce48dec47a4dcf016fb0b02b54177b6ec34->enter($__internal_90a035bbe7aea78dfa37a0fd933d3ce48dec47a4dcf016fb0b02b54177b6ec34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MALrm/Gestion/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a10fa383008e055801bdd73bcb725cc4aa3fe1c4d9b57930567f99fffd39b078->leave($__internal_a10fa383008e055801bdd73bcb725cc4aa3fe1c4d9b57930567f99fffd39b078_prof);

        
        $__internal_90a035bbe7aea78dfa37a0fd933d3ce48dec47a4dcf016fb0b02b54177b6ec34->leave($__internal_90a035bbe7aea78dfa37a0fd933d3ce48dec47a4dcf016fb0b02b54177b6ec34_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c7ecd915df0f30937bb70c524526c2f44f500149a611822b6e372d2d08573a06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7ecd915df0f30937bb70c524526c2f44f500149a611822b6e372d2d08573a06->enter($__internal_c7ecd915df0f30937bb70c524526c2f44f500149a611822b6e372d2d08573a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8f604fbb098ec9369caf3d427b2cc7a546d6b0caab3fe9eaae5d8d711c078c61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f604fbb098ec9369caf3d427b2cc7a546d6b0caab3fe9eaae5d8d711c078c61->enter($__internal_8f604fbb098ec9369caf3d427b2cc7a546d6b0caab3fe9eaae5d8d711c078c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_8f604fbb098ec9369caf3d427b2cc7a546d6b0caab3fe9eaae5d8d711c078c61->leave($__internal_8f604fbb098ec9369caf3d427b2cc7a546d6b0caab3fe9eaae5d8d711c078c61_prof);

        
        $__internal_c7ecd915df0f30937bb70c524526c2f44f500149a611822b6e372d2d08573a06->leave($__internal_c7ecd915df0f30937bb70c524526c2f44f500149a611822b6e372d2d08573a06_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cfe8555d22b5457e8aafc2aed8ea2851be0600baa3750da425f6c0bb56e2bf8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfe8555d22b5457e8aafc2aed8ea2851be0600baa3750da425f6c0bb56e2bf8a->enter($__internal_cfe8555d22b5457e8aafc2aed8ea2851be0600baa3750da425f6c0bb56e2bf8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2d2bfd134ecffd3ed0106784ed91829c517ef45dc6fec4b2f7baae90f83148c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d2bfd134ecffd3ed0106784ed91829c517ef45dc6fec4b2f7baae90f83148c3->enter($__internal_2d2bfd134ecffd3ed0106784ed91829c517ef45dc6fec4b2f7baae90f83148c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ville.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_2d2bfd134ecffd3ed0106784ed91829c517ef45dc6fec4b2f7baae90f83148c3->leave($__internal_2d2bfd134ecffd3ed0106784ed91829c517ef45dc6fec4b2f7baae90f83148c3_prof);

        
        $__internal_cfe8555d22b5457e8aafc2aed8ea2851be0600baa3750da425f6c0bb56e2bf8a->leave($__internal_cfe8555d22b5457e8aafc2aed8ea2851be0600baa3750da425f6c0bb56e2bf8a_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_21454a8438099b03917e9c0d8c4753822cc849e4b811be52325f09bffcfeba60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21454a8438099b03917e9c0d8c4753822cc849e4b811be52325f09bffcfeba60->enter($__internal_21454a8438099b03917e9c0d8c4753822cc849e4b811be52325f09bffcfeba60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9c1ca0779cdb6bd58369eba1a334318b63f99b0fc8e7ed4c5ac3bae239a2ccd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c1ca0779cdb6bd58369eba1a334318b63f99b0fc8e7ed4c5ac3bae239a2ccd3->enter($__internal_9c1ca0779cdb6bd58369eba1a334318b63f99b0fc8e7ed4c5ac3bae239a2ccd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9c1ca0779cdb6bd58369eba1a334318b63f99b0fc8e7ed4c5ac3bae239a2ccd3->leave($__internal_9c1ca0779cdb6bd58369eba1a334318b63f99b0fc8e7ed4c5ac3bae239a2ccd3_prof);

        
        $__internal_21454a8438099b03917e9c0d8c4753822cc849e4b811be52325f09bffcfeba60->leave($__internal_21454a8438099b03917e9c0d8c4753822cc849e4b811be52325f09bffcfeba60_prof);

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
