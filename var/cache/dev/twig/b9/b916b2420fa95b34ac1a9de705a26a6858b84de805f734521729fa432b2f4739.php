<?php

/* MAUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_e5c42a02c83e5070a1c10b1cbd97311daebc349e395e75443c8cac35dacc3f00 extends Twig_Template
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
        $__internal_bb010d7753fba631acbfaa6ab8179a7e96a8f5792d3e7e4444d3acaeda233164 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb010d7753fba631acbfaa6ab8179a7e96a8f5792d3e7e4444d3acaeda233164->enter($__internal_bb010d7753fba631acbfaa6ab8179a7e96a8f5792d3e7e4444d3acaeda233164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Resetting:request_content.html.twig"));

        $__internal_0521a151e23879282dd7100378fc849a02230568c6006bdf12a8ddae324fd63c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0521a151e23879282dd7100378fc849a02230568c6006bdf12a8ddae324fd63c->enter($__internal_0521a151e23879282dd7100378fc849a02230568c6006bdf12a8ddae324fd63c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Resetting:request_content.html.twig"));

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
        
        $__internal_bb010d7753fba631acbfaa6ab8179a7e96a8f5792d3e7e4444d3acaeda233164->leave($__internal_bb010d7753fba631acbfaa6ab8179a7e96a8f5792d3e7e4444d3acaeda233164_prof);

        
        $__internal_0521a151e23879282dd7100378fc849a02230568c6006bdf12a8ddae324fd63c->leave($__internal_0521a151e23879282dd7100378fc849a02230568c6006bdf12a8ddae324fd63c_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_826cc1138b9d6a341d70cbf556a191e7234c869e1a04ad04423aed9cd5ea9333 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_826cc1138b9d6a341d70cbf556a191e7234c869e1a04ad04423aed9cd5ea9333->enter($__internal_826cc1138b9d6a341d70cbf556a191e7234c869e1a04ad04423aed9cd5ea9333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8a6f9ea57ca1632be6425bd264ca70e7c8e311f37d4ecce4cff08fd76bd24c56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a6f9ea57ca1632be6425bd264ca70e7c8e311f37d4ecce4cff08fd76bd24c56->enter($__internal_8a6f9ea57ca1632be6425bd264ca70e7c8e311f37d4ecce4cff08fd76bd24c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/request_content.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
";
        
        $__internal_8a6f9ea57ca1632be6425bd264ca70e7c8e311f37d4ecce4cff08fd76bd24c56->leave($__internal_8a6f9ea57ca1632be6425bd264ca70e7c8e311f37d4ecce4cff08fd76bd24c56_prof);

        
        $__internal_826cc1138b9d6a341d70cbf556a191e7234c869e1a04ad04423aed9cd5ea9333->leave($__internal_826cc1138b9d6a341d70cbf556a191e7234c869e1a04ad04423aed9cd5ea9333_prof);

    }

    public function getTemplateName()
    {
        return "MAUserBundle:Resetting:request_content.html.twig";
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
", "MAUserBundle:Resetting:request_content.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle/Resources/views/Resetting/request_content.html.twig");
    }
}
