<?php

/* MAUserBundle:Resetting:reset_content.html.twig */
class __TwigTemplate_312b1b36f66244bbe4b2ac948616823f5dc28956d652591d69a65df0bd2b720d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7596e0b7e1d4e4106c0322bb4859030e74fae73c6bffc0fca44b3d0da5c9d9da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7596e0b7e1d4e4106c0322bb4859030e74fae73c6bffc0fca44b3d0da5c9d9da->enter($__internal_7596e0b7e1d4e4106c0322bb4859030e74fae73c6bffc0fca44b3d0da5c9d9da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Resetting:reset_content.html.twig"));

        $__internal_c75a652fde4c51245d63063f0ee950dbd7bd7947e7f2c47705716efa5fc2a3b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c75a652fde4c51245d63063f0ee950dbd7bd7947e7f2c47705716efa5fc2a3b7->enter($__internal_c75a652fde4c51245d63063f0ee950dbd7bd7947e7f2c47705716efa5fc2a3b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Resetting:reset_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 6
        echo "
<div class=\"container-fluid\" id=\"reset_container\">
    <div class=\"row\">
        <h3 id=\"reset_title\">CONFIGURATION DU MOT DE PASSE</h3><hr style=\"border: 1px solid darkgray; margin-left: 25px; margin-right: 25px \">
    </div>
    <div class=\"row\">
        <div class=\"col-lg-3\" id=\"form_box_reset\">
            ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "attr" => array("class" => "fos_user_resetting_reset")));
        echo "
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <div>
                <input type=\"submit\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
            </div>
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>

    </div>
</div>

";
        
        $__internal_7596e0b7e1d4e4106c0322bb4859030e74fae73c6bffc0fca44b3d0da5c9d9da->leave($__internal_7596e0b7e1d4e4106c0322bb4859030e74fae73c6bffc0fca44b3d0da5c9d9da_prof);

        
        $__internal_c75a652fde4c51245d63063f0ee950dbd7bd7947e7f2c47705716efa5fc2a3b7->leave($__internal_c75a652fde4c51245d63063f0ee950dbd7bd7947e7f2c47705716efa5fc2a3b7_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e939564faf76d3089f26b9d3b25817f170f782d828acd91775cd7f453b8968a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e939564faf76d3089f26b9d3b25817f170f782d828acd91775cd7f453b8968a5->enter($__internal_e939564faf76d3089f26b9d3b25817f170f782d828acd91775cd7f453b8968a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_90a0d225746dcd3b9bc5a8ad094928a955b5cdfd163f9040121903f328b8655c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90a0d225746dcd3b9bc5a8ad094928a955b5cdfd163f9040121903f328b8655c->enter($__internal_90a0d225746dcd3b9bc5a8ad094928a955b5cdfd163f9040121903f328b8655c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/reset_content.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
";
        
        $__internal_90a0d225746dcd3b9bc5a8ad094928a955b5cdfd163f9040121903f328b8655c->leave($__internal_90a0d225746dcd3b9bc5a8ad094928a955b5cdfd163f9040121903f328b8655c_prof);

        
        $__internal_e939564faf76d3089f26b9d3b25817f170f782d828acd91775cd7f453b8968a5->leave($__internal_e939564faf76d3089f26b9d3b25817f170f782d828acd91775cd7f453b8968a5_prof);

    }

    public function getTemplateName()
    {
        return "MAUserBundle:Resetting:reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 4,  71 => 3,  54 => 18,  49 => 16,  44 => 14,  40 => 13,  31 => 6,  29 => 3,  26 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{% block stylesheets %}
    <link href=\"{{ asset ('css/reset_content.css') }}\" rel='stylesheet' type='text/css' />
{% endblock %}

<div class=\"container-fluid\" id=\"reset_container\">
    <div class=\"row\">
        <h3 id=\"reset_title\">CONFIGURATION DU MOT DE PASSE</h3><hr style=\"border: 1px solid darkgray; margin-left: 25px; margin-right: 25px \">
    </div>
    <div class=\"row\">
        <div class=\"col-lg-3\" id=\"form_box_reset\">
            {{ form_start(form, { 'action': path('fos_user_resetting_reset', {'token': token}), 'attr': { 'class': 'fos_user_resetting_reset' } }) }}
            {{ form_widget(form) }}
            <div>
                <input type=\"submit\" value=\"{{ 'resetting.reset.submit'|trans }}\" />
            </div>
            {{ form_end(form) }}
        </div>

    </div>
</div>

", "MAUserBundle:Resetting:reset_content.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle/Resources/views/Resetting/reset_content.html.twig");
    }
}
