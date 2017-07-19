<?php

/* @MAUser/Resetting/request_content.html.twig */
class __TwigTemplate_d4484a480ad2636525549d4c60ba022e1a80834ca6a2500248f3aa38bf03678b extends Twig_Template
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
        $__internal_8c484f64b1d94d945b5e15c6d3dbfbb9d7174fc3885fddc869d20f6656546d00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c484f64b1d94d945b5e15c6d3dbfbb9d7174fc3885fddc869d20f6656546d00->enter($__internal_8c484f64b1d94d945b5e15c6d3dbfbb9d7174fc3885fddc869d20f6656546d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Resetting/request_content.html.twig"));

        $__internal_874e3dbdca01bc02f34c526203bdf80c61c6eba01e338b58f67d833e8cf2cd61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_874e3dbdca01bc02f34c526203bdf80c61c6eba01e338b58f67d833e8cf2cd61->enter($__internal_874e3dbdca01bc02f34c526203bdf80c61c6eba01e338b58f67d833e8cf2cd61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Resetting/request_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 6
        echo "
<div class=\"container-fluid\" id=\"request_container\">
    <div class=\"row\">
        <h3 style=\"margin-left: 15px\">RE-INITIALISATION DU MOT DE PASSE</h3><hr style=\"border: 1px solid darkgray; margin-left: 25px; margin-right: 25px \">
    </div>
    <div class=\"row\" id=\"form_request\">
        <form action=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
                <label for=\"username\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
                <input type=\"submit\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
        </form>
    </div>
</div>
";
        
        $__internal_8c484f64b1d94d945b5e15c6d3dbfbb9d7174fc3885fddc869d20f6656546d00->leave($__internal_8c484f64b1d94d945b5e15c6d3dbfbb9d7174fc3885fddc869d20f6656546d00_prof);

        
        $__internal_874e3dbdca01bc02f34c526203bdf80c61c6eba01e338b58f67d833e8cf2cd61->leave($__internal_874e3dbdca01bc02f34c526203bdf80c61c6eba01e338b58f67d833e8cf2cd61_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_611081783520aa8213216d62e01b36bac7662cbcd524704adfa2bba1fffaf196 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_611081783520aa8213216d62e01b36bac7662cbcd524704adfa2bba1fffaf196->enter($__internal_611081783520aa8213216d62e01b36bac7662cbcd524704adfa2bba1fffaf196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_65800252f4e667e2a51e7e57ed2e477bf70bd82b5e72985e761c3b82fffa8e5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65800252f4e667e2a51e7e57ed2e477bf70bd82b5e72985e761c3b82fffa8e5a->enter($__internal_65800252f4e667e2a51e7e57ed2e477bf70bd82b5e72985e761c3b82fffa8e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/request_content.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
";
        
        $__internal_65800252f4e667e2a51e7e57ed2e477bf70bd82b5e72985e761c3b82fffa8e5a->leave($__internal_65800252f4e667e2a51e7e57ed2e477bf70bd82b5e72985e761c3b82fffa8e5a_prof);

        
        $__internal_611081783520aa8213216d62e01b36bac7662cbcd524704adfa2bba1fffaf196->leave($__internal_611081783520aa8213216d62e01b36bac7662cbcd524704adfa2bba1fffaf196_prof);

    }

    public function getTemplateName()
    {
        return "@MAUser/Resetting/request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 4,  63 => 3,  48 => 15,  43 => 13,  39 => 12,  31 => 6,  29 => 3,  26 => 2,);
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
    <link href=\"{{ asset ('css/request_content.css') }}\" rel='stylesheet' type='text/css' />
{% endblock %}

<div class=\"container-fluid\" id=\"request_container\">
    <div class=\"row\">
        <h3 style=\"margin-left: 15px\">RE-INITIALISATION DU MOT DE PASSE</h3><hr style=\"border: 1px solid darkgray; margin-left: 25px; margin-right: 25px \">
    </div>
    <div class=\"row\" id=\"form_request\">
        <form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
                <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
                <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
                <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
        </form>
    </div>
</div>
", "@MAUser/Resetting/request_content.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle\\Resources\\views\\Resetting\\request_content.html.twig");
    }
}
