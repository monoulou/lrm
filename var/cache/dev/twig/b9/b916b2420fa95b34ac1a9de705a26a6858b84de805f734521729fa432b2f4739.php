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
        $__internal_aaa58c624e4e8304c0e158746bf176cd6e001345eafac42c94a7653158c2d42e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaa58c624e4e8304c0e158746bf176cd6e001345eafac42c94a7653158c2d42e->enter($__internal_aaa58c624e4e8304c0e158746bf176cd6e001345eafac42c94a7653158c2d42e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Resetting:request_content.html.twig"));

        $__internal_1ec95acd3b5a218fb7244ca0dc51d218e849330bef24faade400ba40e5622fea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ec95acd3b5a218fb7244ca0dc51d218e849330bef24faade400ba40e5622fea->enter($__internal_1ec95acd3b5a218fb7244ca0dc51d218e849330bef24faade400ba40e5622fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Resetting:request_content.html.twig"));

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
        
        $__internal_aaa58c624e4e8304c0e158746bf176cd6e001345eafac42c94a7653158c2d42e->leave($__internal_aaa58c624e4e8304c0e158746bf176cd6e001345eafac42c94a7653158c2d42e_prof);

        
        $__internal_1ec95acd3b5a218fb7244ca0dc51d218e849330bef24faade400ba40e5622fea->leave($__internal_1ec95acd3b5a218fb7244ca0dc51d218e849330bef24faade400ba40e5622fea_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_05c272b22c915e0197806e1fd712003ccb6c6428a2c22a63c8baeda54a4667eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05c272b22c915e0197806e1fd712003ccb6c6428a2c22a63c8baeda54a4667eb->enter($__internal_05c272b22c915e0197806e1fd712003ccb6c6428a2c22a63c8baeda54a4667eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_745b7a72a8c1c3e3f1e094dbbf97d8ad34684644cde643a51cfab7382f1a9c3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_745b7a72a8c1c3e3f1e094dbbf97d8ad34684644cde643a51cfab7382f1a9c3e->enter($__internal_745b7a72a8c1c3e3f1e094dbbf97d8ad34684644cde643a51cfab7382f1a9c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/request_content.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
";
        
        $__internal_745b7a72a8c1c3e3f1e094dbbf97d8ad34684644cde643a51cfab7382f1a9c3e->leave($__internal_745b7a72a8c1c3e3f1e094dbbf97d8ad34684644cde643a51cfab7382f1a9c3e_prof);

        
        $__internal_05c272b22c915e0197806e1fd712003ccb6c6428a2c22a63c8baeda54a4667eb->leave($__internal_05c272b22c915e0197806e1fd712003ccb6c6428a2c22a63c8baeda54a4667eb_prof);

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
