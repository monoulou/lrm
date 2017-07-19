<?php

/* MAUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_e71b46e6ba830825032171ef76ef4857a0e0bb57dfb8e2d0b5018da178ad0289 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "MAUserBundle:Resetting:reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_67cb1230f753a234ebc2b5ec7e7eed289b71363ea4db857b692cd0655c2b723a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67cb1230f753a234ebc2b5ec7e7eed289b71363ea4db857b692cd0655c2b723a->enter($__internal_67cb1230f753a234ebc2b5ec7e7eed289b71363ea4db857b692cd0655c2b723a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Resetting:reset.html.twig"));

        $__internal_91d516d0826be7cf61fe9f637a282895463a11c6384cf8fb76b629a375a5fda8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91d516d0826be7cf61fe9f637a282895463a11c6384cf8fb76b629a375a5fda8->enter($__internal_91d516d0826be7cf61fe9f637a282895463a11c6384cf8fb76b629a375a5fda8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MAUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67cb1230f753a234ebc2b5ec7e7eed289b71363ea4db857b692cd0655c2b723a->leave($__internal_67cb1230f753a234ebc2b5ec7e7eed289b71363ea4db857b692cd0655c2b723a_prof);

        
        $__internal_91d516d0826be7cf61fe9f637a282895463a11c6384cf8fb76b629a375a5fda8->leave($__internal_91d516d0826be7cf61fe9f637a282895463a11c6384cf8fb76b629a375a5fda8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_23a85038b1bbc35786f612cb3ba5470ab5efd730e8043923a17b4c84e90ca6b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23a85038b1bbc35786f612cb3ba5470ab5efd730e8043923a17b4c84e90ca6b3->enter($__internal_23a85038b1bbc35786f612cb3ba5470ab5efd730e8043923a17b4c84e90ca6b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d3544230d5d25c403fbb296f4e5fec14e16077b2598e5364835d7d47bc3b592d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3544230d5d25c403fbb296f4e5fec14e16077b2598e5364835d7d47bc3b592d->enter($__internal_d3544230d5d25c403fbb296f4e5fec14e16077b2598e5364835d7d47bc3b592d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "MAUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_d3544230d5d25c403fbb296f4e5fec14e16077b2598e5364835d7d47bc3b592d->leave($__internal_d3544230d5d25c403fbb296f4e5fec14e16077b2598e5364835d7d47bc3b592d_prof);

        
        $__internal_23a85038b1bbc35786f612cb3ba5470ab5efd730e8043923a17b4c84e90ca6b3->leave($__internal_23a85038b1bbc35786f612cb3ba5470ab5efd730e8043923a17b4c84e90ca6b3_prof);

    }

    public function getTemplateName()
    {
        return "MAUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}", "MAUserBundle:Resetting:reset.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle/Resources/views/Resetting/reset.html.twig");
    }
}
